// --- LÓGICA DO PLAYER DE VÍDEO DO YOUTUBE ---
var player;
function onYouTubeIframeAPIReady() {
    // Detecta qual página está sendo usada baseado no título
    const pageTitle = document.title.toLowerCase();
    let videoId;
    
    if (pageTitle.includes('whatsapp')) {
        // Página do WhatsApp
        videoId = 'HtTrA8f7yLg';
    } else {
        // Página Index (padrão)
        videoId = 'ncSp563j1vA';
    }
    
    player = new YT.Player('youtube-player', {
        videoId: videoId, // ID do vídeo do YouTube baseado na página
        playerVars: {
            'autoplay': 1,
            'controls': 1, // Alterado de 0 para 1 para mostrar a barra de progresso
            'mute': 1,
            'loop': 1,
            'playlist': videoId, // Necessário para o loop de um único vídeo
            'rel': 0,
            'showinfo': 0,
            'modestbranding': 1
        },
        events: {
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
    
    // --- Lógica do overlay do vídeo corrigida ---
    const videoOverlay = document.getElementById('video-overlay');
    const videoOverlayContent = document.getElementById('video-overlay-content');
    const videoOverlayCloseBtn = document.getElementById('video-overlay-close');

    if (videoOverlay && videoOverlayContent && videoOverlayCloseBtn) {
        // Evento para ativar o som e fechar
        videoOverlayContent.addEventListener('click', () => {
            player.unMute();
            videoOverlay.classList.add('hidden');
        });

        // Evento para apenas fechar, mantendo mudo
        videoOverlayCloseBtn.addEventListener('click', () => {
            videoOverlay.classList.add('hidden');
        });
    }
}


// --- LÓGICA GERAL DO SITE ---
document.addEventListener('DOMContentLoaded', function() {

    // EFEITO DO MENU DE NAVEGAÇÃO AO ROLAR A PÁGINA
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // FUNCIONALIDADE DO FAQ (ACORDEÃO)
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const answer = item.querySelector('.faq-answer');
            const isOpen = item.classList.contains('active');
            faqItems.forEach(i => {
                i.classList.remove('active');
                i.querySelector('.faq-answer').style.maxHeight = null;
            });
            if (!isOpen) {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + "px";
            }
        });
    });

    // CARROSSEL DE AVALIAÇÕES
    const slides = document.querySelectorAll('.testimonial-card');
    if (slides.length > 0) {
        const sliderContainer = document.querySelector('.testimonial-slider');
        const nextBtn = document.querySelector('#testimonials .next');
        const prevBtn = document.querySelector('#testimonials .prev');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                    if (sliderContainer) {
                        sliderContainer.style.minHeight = slide.scrollHeight + 'px';
                    }
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        if (nextBtn && prevBtn) {
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
        }
        
        setInterval(nextSlide, 7000);
        showSlide(0); // Garante que a altura seja definida no carregamento
    }

    // ANIMAÇÃO DO CONTADOR
    const counter = document.getElementById('counter');
    if (counter) {
        const target = +counter.getAttribute('data-target');
        let hasAnimated = false;

        function animateCounter() {
            const duration = 2000;
            let currentNumber = 0;
            const step = () => {
                const increment = Math.ceil(target / (duration / 16));
                currentNumber += increment;
                if (currentNumber > target) {
                    counter.innerText = `+${target}`;
                    return;
                }
                counter.innerText = `+${currentNumber}`;
                requestAnimationFrame(step);
            };
            step();
        }

        const observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting && !hasAnimated) {
                animateCounter();
                hasAnimated = true;
                observer.disconnect();
            }
        }, { threshold: 0.7 });
        observer.observe(counter);
    }

    // --- LÓGICA GERAL DOS MODAIS ---
    const openModalButtons = {
        'open-modal-btn': 'sentences-modal',
        'open-oab-modal-btn': 'oab-modal',
        'open-privacy-modal-btn': 'privacy-modal',
        'open-terms-modal-btn': 'terms-modal'
    };

    const openModalById = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) modal.classList.add('active');
    };

    const closeModalById = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) modal.classList.remove('active');
    };

    // Adiciona eventos para abrir os modais
    for (const btnId in openModalButtons) {
        const btn = document.getElementById(btnId);
        if (btn) {
            btn.addEventListener('click', (e) => {
                e.preventDefault(); // Previne o comportamento padrão do link '#'
                openModalById(openModalButtons[btnId]);
            });
        }
    }

    // Adiciona eventos para fechar os modais (nos botões '×' e no fundo)
    document.querySelectorAll('.modal-overlay').forEach(overlay => {
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                closeModalById(overlay.id);
            }
        });
    });

    document.querySelectorAll('.modal-close').forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            closeModalById(closeBtn.getAttribute('data-modal-id'));
        });
    });

    // --- LÓGICA ESPECÍFICA DO MODAL DE SENTENÇAS (NAVEGAÇÃO) ---
    const sentencesModal = document.getElementById('sentences-modal');
    if (sentencesModal) {
        const modalImages = sentencesModal.querySelectorAll('.modal-image');
        const nextNavBtn = sentencesModal.querySelector('.modal-nav.next');
        const prevNavBtn = sentencesModal.querySelector('.modal-nav.prev');
        let currentImageIndex = 0;

        const showImage = (index) => {
            modalImages.forEach((img, i) => {
                img.classList.toggle('active', i === index);
            });
        };

        if (nextNavBtn) {
            nextNavBtn.addEventListener('click', () => {
                currentImageIndex = (currentImageIndex + 1) % modalImages.length;
                showImage(currentImageIndex);
            });
        }
        
        if (prevNavBtn) {
            prevNavBtn.addEventListener('click', () => {
                currentImageIndex = (currentImageIndex - 1 + modalImages.length) % modalImages.length;
                showImage(currentImageIndex);
            });
        }
    }
});