<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Mendes Jorge - Recuperação de Conta WhatsApp</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/logo-pequena.jpg" type="image/jpeg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/whatsapp.css">
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <nav class="navbar">
            <a href="#inicio" class="nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/logo-pequena.png" alt="Logo Victor Mendes Jorge">
                <span>Victor Mendes Jorge</span>
            </a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#inicio" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#servicos" class="nav-link">Serviços</a></li>
                <li class="nav-item"><a href="#sobre" class="nav-link">Quem Sou</a></li>
                <li class="nav-item"><a href="#passo-a-passo" class="nav-link">Como Funciona</a></li>
                <li class="nav-item"><a href="#faq" class="nav-link">Dúvidas</a></li>
                <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-container">
                <div class="hero-text">
                    <h1>SUA CONTA DO <span class="whatsapp-text">WHATSAPP</span> FOI BANIDA, SUSPENSA OU HACKEADA?</h1>
                    <p>Te ajudamos a recuperá-la <strong>em até 48 horas</strong>, podendo receber indenizações <strong>de 5 a 15 mil reais pelos transtornos e prejuízos</strong> gerados!</p>
                     <a href="https://wa.me/5517996048099?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="cta-button">
                        <i class="fab fa-whatsapp"></i> Recupere o acesso de sua conta do WhatsApp em até 48 horas
                    </a>
                </div>
                <div id="video-container" class="hero-video">
                    <div id="youtube-player"></div>
                    <div id="video-overlay">
                        <button id="video-overlay-close" class="video-overlay-close-btn">×</button>
                        <div id="video-overlay-content">
                            <i class="fas fa-volume-up"></i>
                            <span>O vídeo já iniciou, clique para ouvir</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="services">
            <h2>Recuperação Segura e Eficiente da Sua Conta do WhatsApp</h2>
            <div class="services-grid">
                <div class="service-card"><i class="fas fa-user-secret"></i><h3>Crimes digitais e hackeamento do WhatsApp</h3></div>
                <div class="service-card"><i class="fas fa-comment-slash"></i><h3>Conta do WhatsApp bloqueada, banida ou suspensa</h3></div>
                <div class="service-card"><i class="fas fa-user-lock"></i><h3>Recuperação de conta empresarial ou profissional</h3></div>
                <div class="service-card"><i class="fas fa-shield-alt"></i><h3>Proteção de dados e segurança reforçada</h3></div>
                <div class="service-card"><i class="fas fa-gavel"></i><h3>Processo judicial com pedido de liminar em até 48 horas</h3></div>
            </div>
            <a href="https://wa.me/5517996048099?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="cta-button">
                <i class="fab fa-whatsapp"></i> Tire Suas Dúvidas
            </a>
        </section>

        <section class="alert-rs">
            <h2>Se você já passou por isso, poderá ter seu número de volta e receber até R$15.000,00 em Indenizações pelos transtornos causados!</h2>
        </section>

        <section class="time-matters">
            <div class="time-matters-content">
                <i class="fas fa-hourglass-half"></i>
                <h2>A DEMORA É O MAIOR RISCO!</h2>
                <p><strong>Não perca mais tempo.</strong> Com o passar dos dias, suas chances de recuperar sua conta do WhatsApp e seus dados podem diminuir significativamente. Você corre o risco de perder sua conta e todas as suas informações para sempre!</p>
                <p>Sua conta do WhatsApp é essencial para sua vida ou negócio? <strong>Não perca tempo! Fale conosco agora e garanta a recuperação da sua conta e da sua tranquilidade!</strong></p>
                <a href="https://wa.me/5517996048099?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="cta-button">Fale com um Especialista Agora!</a>
            </div>
        </section>

        <section class="counter-section">
            <div class="counter-container">
                <div id="counter" class="counter-number" data-target="1900">+0</div>
                <p>Processos com contas recuperadas por todo o país!</p>
                <a href="https://www.escavador.com/nomes/victor-mendes-jorge-7207629487" target="_blank" class="cta-button-outline">Ver Processos no Escavador</a>
            </div>
        </section>

        <section id="sobre" class="about">
            <div class="about-container">
                <h2>Quem sou eu</h2>
                <div class="about-content">
                    <div class="about-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/advogado-foto.jpg" alt="Foto do Advogado Victor Mendes Jorge">
                    </div>
                    <div class="about-text">
                        <p>Advogado especialista em Direito Digital desde 2016, sou uma referência nacional na recuperação de contas do WhatsApp. Com quase dois mil processos em todo o Brasil, dedico minha carreira exclusivamente a ajudar vítimas que perderam o acesso às suas contas do WhatsApp, seja por hackeamento, bloqueio, suspensão ou banimento indevido.</p>
                        <p>Minha especialização é única: <strong>recuperar contas do WhatsApp através de processos judiciais com pedido de liminar, garantindo que você tenha sua conta de volta em até 48 horas.</strong> Entendo a angústia de quem perdeu o acesso a conversas importantes, contatos profissionais, grupos de trabalho e toda uma vida digital armazenada no WhatsApp. Por isso, desenvolvi estratégias jurídicas específicas e eficazes para este tipo de caso.</p>
                        <p>A verdade é que estou <strong>comprometido em buscar todas as soluções possíveis para restabelecer o controle de acesso à sua conta do WhatsApp.</strong> Nossa experiência em casos de contas banidas, suspensas ou hackeadas é ampla, <strong>e contamos com uma equipe altamente profissional para lidar até mesmo com situações mais desafiadoras.</strong> Você pode confiar que faremos o melhor por você!</p>
                        <p>Meu compromisso é com a transparência e o resultado. Ofereço contato direto e ágil via WhatsApp ou chamada de vídeo, transformando a indignação dos meus clientes em justiça e reparação. Com o ranking máximo de cinco estrelas no Google, meu maior reconhecimento é a confiança e a satisfação de quem defendo, especialmente aqueles que recuperaram suas contas e puderam voltar a usar o WhatsApp normalmente.</p>
                    </div>
                </div>

                <div class="trust-section">
                    <h3>Por que Confiar em Nosso Trabalho?</h3>
                    <div class="trust-points">
                        <div class="trust-point">
                            <i class="fas fa-shield-alt"></i>
                            <h4>Experiência Comprovada</h4>
                            <p>Mais de 1.900 processos em todo o Brasil, com atuação especializada em recuperação de contas do WhatsApp e Direito Digital.</p>
                        </div>
                        <div class="trust-point">
                            <i class="fas fa-balance-scale-right"></i>
                            <h4>Foco em Resultados</h4>
                            <p>Estratégias jurídicas modernas para garantir uma reparação justa e eficiente para o seu caso.</p>
                        </div>
                        <div class="trust-point">
                            <i class="fas fa-handshake"></i>
                            <h4>Compromisso e Transparência</h4>
                            <p>Atendimento ágil e de alta qualidade, com acesso direto e clareza em todas as etapas do processo.</p>
                        </div>
                    </div>
                </div>

                <div class="oab-section">
                    <h4>Consulte o registro profissional</h4>
                    <p>Para garantir sua segurança, consulte o registro na OAB do Dr. Victor Mendes Jorge. Acesse o link abaixo, insira o nome completo 'Victor Mendes Jorge' no campo de busca e selecione a opção 'Advogado'.</p>
                    <a href="https://cna.oab.org.br/" target="_blank" class="oab-link">Acessar Cadastro Nacional da OAB</a>
                    <button id="open-oab-modal-btn" class="cta-button-outline small-btn">
                        <i class="fas fa-image"></i> Ver Exemplo de Consulta
                    </button>
                </div>

                <div class="team-section">
                    <h3>Minha Equipe</h3>
                    <p class="team-intro">Conto com um time de profissionais altamente qualificados e dedicados, prontos para oferecer o melhor suporte em cada etapa do seu processo.</p>
                    <div>
                        <img class="team-image" src="<?php echo get_template_directory_uri(); ?>/equipe-completa.jpg" alt="Foto da equipe presencial completa">
                    </div>
                    
                    <div class="team-grid">
                        <div class="team-member">
                            <img src="<?php echo get_template_directory_uri(); ?>/joao-vitor.jpg" alt="Foto de Joao Vitor de Carvalho">
                            <h4>Joao Vitor de Carvalho</h4>
                            <span>Advogado Associado (OAB/SP 538.663)</span>
                        </div>
                        <div class="team-member">
                            <img src="<?php echo get_template_directory_uri(); ?>/rayssa-helena-edit.jpg" alt="Foto de Rayssa Helena">
                            <h4>Rayssa Helena</h4>
                            <span>Atendimento ao Cliente</span>
                        </div>
                         <div class="team-member">
                            <img src="<?php echo get_template_directory_uri(); ?>/guilherme-pereira.jpg" alt="Foto de Guilherme Pereira">
                            <h4>Guilherme Pereira</h4>
                            <span>Acompanhamento Processual</span>
                        </div>
                        <div class="team-member">
                            <img src="<?php echo get_template_directory_uri(); ?>/guilherme-campos.jpg" alt="Foto de Guilherme Campos">
                            <h4>Guilherme Campos</h4>
                            <span>Cumprimento de Decisões</span>
                        </div>
                        <div class="team-member">
                            <img src="<?php echo get_template_directory_uri(); ?>/thiago-ferreira.jpg" alt="Foto de Thiago Ferreira">
                            <h4>Thiago Ferreira</h4>
                            <span>Peticionamento Inicial</span>
                        </div>
                    </div>
                </div>
                 <a href="https://wa.me/5517996048099?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="cta-button">
                    <i class="fab fa-whatsapp"></i> Fale com minha equipe
                </a>
            </div>
        </section>

        <section id="passo-a-passo" class="steps">
            <h2>Como Funciona a Recuperação da Sua Conta do WhatsApp</h2>
            <div class="steps-container">
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-comments"></i></div>
                    <h3>1. Contato Inicial</h3>
                    <p>Você nos conta o que aconteceu com sua conta do WhatsApp de forma simples e direta. Entendemos a situação da sua conta em detalhes (tudo de forma 100% online).</p>
                </div>
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-file-signature"></i></div>
                    <h3>2. Análise e Documentos</h3>
                    <p>Envie as provas (prints, e-mails) e documentos de forma 100% online e segura. Nossa equipe analisa seu caso de forma personalizada.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-pen-nib"></i></div>
                    <h3>3. Contrato Digital</h3>
                    <p>Você assina o contrato eletronicamente, com total validade jurídica e rapidez. Nosso processo é eficiente para as necessidades urgentes dos nossos clientes.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-gavel"></i></div>
                    <h3>4. Ação Judicial com Liminar</h3>
                    <p>Protocolamos a ação no foro da sua cidade com pedido de liminar. Recuperamos sua conta empresarial ou profissional em aproximadamente 48 horas, por meio de um processo judicial.</p>
                </div>
                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-search-location"></i></div>
                    <h3>5. Acompanhamento Completo</h3>
                    <p>Você acompanha tudo online e nossa equipe informa sobre cada avanço importante. Atendimento humanizado e suporte completo durante todo o processo.</p>
                </div>
            </div>
        </section>

        <section id="social-media" class="social-media">
            <h2>Acompanhe nas Redes Sociais</h2>
            <div class="social-links">
                <a href="https://www.instagram.com/victormendesjorge/" target="_blank"><i class="fab fa-instagram"></i> @victormendesjorge</a>
                <a href="https://www.tiktok.com/@victorjorgeadv" target="_blank"><i class="fab fa-tiktok"></i> @victorjorgeadv</a>
                <a href="https://www.facebook.com/victor.mendesjorge" target="_blank"><i class="fab fa-facebook"></i> Victor Mendes Jorge</a>
            </div>
        </section>

        <section id="faq" class="faq">
            <h2>Dúvidas Frequentes</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question"><span>É possível recuperar minha conta do WhatsApp?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Sim, é possível. Por meio de um processo judicial, podemos solicitar ao juiz uma liminar para que a empresa responsável seja obrigada a restabelecer o acesso à sua conta de forma prioritária. Este é um recurso jurídico eficaz.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><span>Qual o prazo estimado para recuperação da conta?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>O prazo pode variar conforme a urgência do caso e a agilidade do Judiciário. Em ações com pedido de liminar, decisões podem ser emitidas em até 48 horas, embora isso dependa do tribunal e das especificidades de cada situação.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><span>O que acontece se o WhatsApp foi hackeado?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Nos casos de hackeamento, além de solicitar a recuperação da conta, podemos exigir medidas para proteger seus dados e evitar novos incidentes, bem como indenização por danos morais no valor de até R$ 15.000,00, dependendo da situação.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><span>E se a empresa não cumprir a decisão judicial?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Caso a empresa descumpra uma ordem judicial, podemos solicitar a aplicação de multa diária para forçá-la a cumprir a determinação.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><span>Quem pode contratar este serviço?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Qualquer pessoa física ou jurídica que teve a conta do WhatsApp bloqueada, banida ou suspensa.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><span>Como vocês vão conseguir recuperar minha conta?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer"><p>Entre em contato com nosso escritório para uma análise personalizada do seu caso. Após a avaliação, iniciaremos os procedimentos do processo de forma imediata, através de um processo judicial com pedido de liminar, onde conseguimos uma decisão que ordena a devolução do acesso à sua conta do WhatsApp.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question"><span>Como faço para entrar em contato?</span><i class="fas fa-chevron-down"></i></button>
                    <div class="faq-answer">
                        <p>Clique no botão abaixo para entrar em contato com o Dr. Victor Mendes Jorge, para explicar o seu caso o mais rápido possível.</p>
                        <a href="https://wa.me/5517996048099?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="cta-button-faq"><i class="fab fa-whatsapp"></i> Quero Entrar em Contato</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="importancia" class="importance">
            <h2>A Importância de Buscar Seus Direitos</h2>
            <div class="importance-content">
                <p>Não se trata apenas de recuperar sua conta, mas de garantir seus direitos e minimizar os prejuízos causados pela suspensão ou bloqueio. Muitos desistem de lutar por seus direitos após terem sua conta do WhatsApp invadida ou banida, mas a Justiça tem decidido a favor do consumidor.</p>
                <p>Cada instante sem acesso à sua conta pode <strong>intensificar os prejuízos para sua empresa e comprometer sua imagem</strong>, além do risco de perder o controle da conta de forma definitiva. Quanto mais você adia a solução, maiores são os perigos.</p>
                <p>Sua conta do WhatsApp é um <strong>patrimônio digital</strong>. Deixar de agir é permitir que grandes empresas tratem o consumidor com descaso. Ao entrar com a ação, você protege sua imagem, sua dignidade e garante que seus direitos sejam respeitados. <strong>Não perca mais tempo!</strong> Agir rapidamente é a melhor maneira de recuperar o controle do seu WhatsApp, que é seu por direito.</p>
                <button id="open-modal-btn" class="cta-button-outline">
                    <i class="fas fa-balance-scale"></i> Ver Sentenças Reais
                </button>
            </div>
        </section>

        <section id="testimonials" class="testimonials">
             <h2>Veja o que meus clientes acham sobre mim</h2>
             <h3 class="h3-star">Somos um escritório 5 estrelas no Google <span class="stars-ini">★★★★★</span></h3>
             <div class="testimonial-slider">
                <div class="testimonial-card active">
                    <div class="testimonial-header">
                        <img src="https://lh3.googleusercontent.com/a-/ALV-UjVB5f0SiKU-rHWTJ9T3ofTKA-dBHZKdS4i3VjLLUL6206OlTlE=w72-h72-p-rp-mo-br100" alt="Foto de Claudir Ribeiro" class="testimonial-author-img">
                        <div class="testimonial-author-info">
                            <h4>Claudir Ribeiro</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <i class="fab fa-google google-icon"></i>
                    </div>
                    <div class="testimonial-body">
                        <p>"Senhor Dr Victor Mendes Jorge profissional muito qualificado e competente ao extremo não mediu esforços para atender me e resolver todos meus processos esse eu indico e assino embaixo nota 10."</p>
                    </div>
                 </div>
                 <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://lh3.googleusercontent.com/a-/ALV-UjX9oK0OmU35Gfgqb-RJWiqKot8as9t-CykTll9Ac0gLdAXQrfis=w72-h72-p-rp-mo-br100" alt="Foto de Beatriz Castelluccio" class="testimonial-author-img">
                        <div class="testimonial-author-info">
                            <h4>Beatriz Castelluccio</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <i class="fab fa-google google-icon"></i>
                    </div>
                    <div class="testimonial-body">
                        <p>"Excelente profissional! Um advogado dedicado, com garra e comprometimento em cada detalhe. Explica com clareza, tira todas as dúvidas e transmite confiança ao longo do processo. Graças à sua orientação, consegui entender todo o andamento do meu caso e me senti segura em cada etapa. Recomendo de olhos fechados!"</p>
                    </div>
                 </div>
                 <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://lh3.googleusercontent.com/a/ACg8ocKg0OdbKBB3pqUrLD4EPH2qNpLcjfzYQHyu30dt_WSMzbENig=w72-h72-p-rp-mo-ba4-br100" alt="Foto de Alexandre Medina" class="testimonial-author-img">
                        <div class="testimonial-author-info">
                            <h4>Alexandre Medina</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <i class="fab fa-google google-icon"></i>
                    </div>
                    <div class="testimonial-body">
                        <p>"Excelente profissional!! Super atencioso e resolveu meu caso referente a conta do WhatsApp que foi hackeada em menos de 48 horas. Super recomendo!!!"</p>
                    </div>
                 </div>
                 <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://lh3.googleusercontent.com/a-/ALV-UjXg8wcM6l7d3ySyKsb3WQYDgn09rRDby7auaF_1Ly-8okq2r8ZLHw=w72-h72-p-rp-mo-br100" alt="Foto de Samuel Jorge Matheus" class="testimonial-author-img">
                        <div class="testimonial-author-info">
                            <h4>Samuel Jorge Matheus</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <i class="fab fa-google google-icon"></i>
                    </div>
                    <div class="testimonial-body">
                        <p>"Depois de buscar ajuda com alguns advogados sem sucesso, finalmente encontrei no Dr. Victor a solução que precisava. Com uma única tentativa, ele resolveu meu caso com rapidez, segurança e total domínio do assunto. Profissional extremamente competente, comprometido e eficaz. Recomendo!"</p>
                    </div>
                 </div>
                 <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://lh3.googleusercontent.com/a-/ALV-UjVMXMqgW_hApR5wR8ZLKpbLanpukOTTJz0qR5fv33u5xwFTLyPP=w72-h72-p-rp-mo-br100" alt="Foto de Prô Gislaine Palácios" class="testimonial-author-img">
                        <div class="testimonial-author-info">
                            <h4>Prô Gislaine Palácios</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <i class="fab fa-google google-icon"></i>
                    </div>
                    <div class="testimonial-body">
                        <p>"O processo foi concluído com sucesso. Todo o apoio necessário foi de extrema importância, para que pudesse fer feito com a correta orientação. Obrigada Dr. Victor"</p>
                    </div>
                 </div>
                 <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="https://lh3.googleusercontent.com/a/ACg8ocK8WAHbJquKBqiztq6MQQ2EXWH2m6PKkbUoo7q0-qrZq7uB=w72-h72-p-rp-mo-br100" alt="Foto de Valeria Geromel" class="testimonial-author-img">
                        <div class="testimonial-author-info">
                            <h4>Valeria Geromel</h4>
                            <div class="stars">★★★★★</div>
                        </div>
                        <i class="fab fa-google google-icon"></i>
                    </div>
                    <div class="testimonial-body">
                        <p>"Boa tarde, parabéns Dr.Vitor ,o atendimento excelente, tds as vezes que precisei sempre correspondeu as expectativas , um advogado idôneo, com certeza super indico a tds que precisarem de um advogado responsável, prestativo ,eficiente, conte com Dr. Vitor Mendes ."</p>
                    </div>
                 </div>
                 <button class="slider-btn prev"><i class="fas fa-chevron-left"></i></button>
                 <button class="slider-btn next"><i class="fas fa-chevron-right"></i></button>
             </div>
             <h3>Ficou com alguma dúvida? Entre em contato agora mesmo</h3>
             <a href="https://wa.me/5517996048099?text=Ol%C3%A1!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es" target="_blank" class="cta-button"><i class="fab fa-whatsapp"></i> Entre em Contato Agora</a>
        </section>

        <section class="nationwide-service">
            <h2>Atendimento em todo o Brasil</h2>
        </section>
    </main>

    <footer id="contato" class="footer">
        <div class="footer-container">
            <div class="footer-info">
                <img src="<?php echo get_template_directory_uri(); ?>/logo-grande.png" alt="Logo Completa Victor Mendes Jorge">
                <div class="contact-details">
                    <h3 style="color: white;">Entre em Contato</h3>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Endereço:</strong> Rua 12, 2572 - Jales, SP</p>
                    <p><i class="fas fa-phone"></i> <strong>Telefone:</strong> (17) 99604-8099</p>
                    <p><i class="fas fa-envelope"></i> <strong>Email:</strong> vm.jorge@hotmail.com</p>
                </div>
            </div>
            <div class="footer-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3716.327702810857!2d-50.5519230247328!3d-20.26442658133501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94982f99a38f954b%3A0x1b933e144a04581f!2sR.%20Doze%2C%202572%20-%20Centro%2C%20Jales%20-%20SP%2C%2015700-010!5e0!3m2!1spt-BR!2sbr!4v1726954477815!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Victor Mendes Jorge. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="#" id="open-privacy-modal-btn">Política de Privacidade</a> | <a href="#" id="open-terms-modal-btn">Termos de Uso</a>
            </div>
            <p class="disclaimer">Esse site não faz parte do Google LLC nem do Facebook Inc. e não oferecemos nenhum tipo de serviço oficial do governo. Trabalhamos exclusivamente com serviços jurídicos.</p>
            <p class="developer-credit">Desenvolvido por: Ifware Sistemas</p>
        </div>
    </footer>

    <div id="sentences-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" data-modal-id="sentences-modal">×</button>
            <div class="modal-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/sentenca-real-1.jpg" alt="Sentença Real 1" class="modal-image active">
                <img src="<?php echo get_template_directory_uri(); ?>/sentenca-real-2.jpg" alt="Sentença Real 2" class="modal-image">
            </div>
            <button class="modal-nav prev">❮</button>
            <button class="modal-nav next">❯</button>
        </div>
    </div>
    
    <div id="oab-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" data-modal-id="oab-modal">×</button>
            <div class="modal-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/oab-exemplo.png" alt="Exemplo de como consultar a OAB" class="modal-image active">
            </div>
        </div>
    </div>

    <div id="privacy-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" data-modal-id="privacy-modal">×</button>
            <div class="text-modal-scroll-area">
                <h2>Política de Privacidade</h2>
                <p>A sua privacidade é importante para nós. É política do Dr Victor Mendes Jorge respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Dr Victor Mendes Jorge, e outros sites que possuímos e operamos.</p>
                <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.</p>
                <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>
                <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>
                <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas políticas de privacidade.</p>
                <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>
                <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>
                <h3>Compromisso do Usuário</h3>
                <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Dr Victor Mendes Jorge oferece no site e com caráter enunciativo, mas não limitativo:</p>
                <ul>
                    <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
                    <li>B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, de azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
                    <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Dr Victor Mendes Jorge, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
                </ul>
                <p>Esta política é efetiva a partir de 23 de Setembro de 2025.</p>
            </div>
        </div>
    </div>

    <div id="terms-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" data-modal-id="terms-modal">×</button>
            <div class="text-modal-scroll-area">
                <h2>1. Termos</h2>
                <p>Ao acessar ao site Dr Victor Mendes Jorge, concorda em cumprir estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e marcas comerciais aplicáveis.</p>
                <h2>2. Uso de Licença</h2>
                <p>É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software) no site Dr Victor Mendes Jorge , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma transferência de título e, sob esta licença, você não pode: modificar ou copiar os materiais; usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não comercial); tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Dr Victor Mendes Jorge; remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor. Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser rescindida por Dr Victor Mendes Jorge a qualquer momento. Ao encerrar a visualização desses materiais ou após o término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</p>
                <h2>3. Isenção de responsabilidade</h2>
                <p>Os materiais no site da Dr Victor Mendes Jorge são fornecidos 'como estão'. Dr Victor Mendes Jorge não oferece garantias, expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim específico ou não violação de propriedade intelectual ou outra violação de direitos. Além disso, o Dr Victor Mendes Jorge não garante ou faz qualquer representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</p>
                <h2>4. Limitações</h2>
                <p>Em nenhum caso o Dr Victor Mendes Jorge ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os materiais em Dr Victor Mendes Jorge, mesmo que Dr Victor Mendes Jorge ou um representante autorizado da Dr Victor Mendes Jorge tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a você.</p>
                <h2>5. Links</h2>
                <p>O Dr Victor Mendes Jorge não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer link não implica endosso por Dr Victor Mendes Jorge do site. O uso de qualquer site vinculado é por conta e risco do usuário.</p>
                <h3>Modificações</h3>
                <p>O Dr Victor Mendes Jorge pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
            </div>
        </div>
    </div>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>

