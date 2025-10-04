<section>
    <div class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="col footer__about">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Imagem da logo na cor branca">
                    <p>Transformando ideias em soluções digitais inovadoras. Sua parceira estratégica na jornada de transformação digital.</p>
                    <ul class="contact__list">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-localization.png" alt="Imagem do ícone de localização na cor branca">
                            <span>São Paulo, SP - Brasil</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-phone.png" alt="Imagem do ícone de localização na cor branca">
                            <span>+55 (11) 9999-9999</span>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-email.png" alt="Imagem do ícone de localização na cor branca">
                            <span>contato@techinova.com.br</span>
                        </li>
                    </ul>
                </div>
                <div class="col footer__links">
                    <h3 class="footer__links__title">Links Rápidos</h3>
                    <ul class="footer__links__list">
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Cases</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Carreiras</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col footer__services">
                    <h3 class="footer__services__title">Serviços</h3>
                    <ul class="footer__services__list">
                        <li><a href="#">Desenvolvimento Web</a></li>
                        <li><a href="#">Aplicativos Mobile</a></li>
                        <li><a href="#">Cloud Computing</a></li>
                        <li><a href="#">Integrações</a></li>
                        <li><a href="#">Consultoria em TI</a></li>
                        <li><a href="#">Transformação Digital</a></li>
                    </ul>
                </div>
                <div class="col footer__newsletter">
                    <h3 class="footer__newsletter__title">Newsletter</h3>
                    <span>Receba insights exclusivos sobre tecnologia e inovação</span>
                    <form action="" class="footer__newsletter__form">
                        <input type="email" placeholder="Seu email">
                        <button>Assinar</button>
                    </form>
                    <div class="footer__socials">
                        <h3>Siga-nos</h3>
                        <ul>
                            <li>
                                <a target="_blacnk" href="https://www.linkedin.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-linkedin.png" alt="Imagem do ícone do linkedin">
                                </a>
                            </li>
                            <li>
                                <a target="_blacnk" href="https://www.github.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-github.png" alt="Imagem do ícone do github">
                                </a>
                            </li>
                            <li>
                                <a target="_blacnk" href="https://www.twitter.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-twitter.png" alt="Imagem do ícone do twitter">
                                </a>
                            </li>
                            <li>
                                <a target="_blacnk" href="https://www.instagram.com">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-instagram.png" alt="Imagem do ícone do instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright__privacy">
                <div class="footer__copyright">
                    <span>© 2024 TechInova. Todos os direitos reservados.</span>
                </div>
                <div class="footer__privacy">
                    <ul>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Termos de Uso</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const MOBILE_MAX = 480;
    let resizeTimer;

    // ----------------------
    // Função genérica para ativar toggle
    // ----------------------
    function setupToggle(titleSelector, containerSelector, listSelector) {
    const titles = document.querySelectorAll(titleSelector);
    if (!titles.length) return; // se não existe, só ignora (não quebra os outros)

    titles.forEach(title => {
        title.addEventListener('click', () => {
        const container = title.closest(containerSelector);
        if (!container) return;

        const list = container.querySelector(listSelector);
        if (!list) return;

        if (window.innerWidth <= MOBILE_MAX) {
            list.classList.toggle('active');
        }
        });
    });
    }

    // Ativa para Links Rápidos
    setupToggle('.footer__links__title', '.footer__links', '.footer__links__list');

    // Ativa para Services
    setupToggle('.footer__services__title', '.footer__services', '.footer__services__list');

    // ----------------------
    // Remove classes ao voltar para desktop
    // ----------------------
    window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        if (window.innerWidth > MOBILE_MAX) {
        document.querySelectorAll('.footer__links__list.active, .footer__services__list.active')
            .forEach(ul => ul.classList.remove('active'));
        }
    }, 120);
    });
});


</script>