<?php
get_header(); ?>

<section class="content__page">
    <div class="component__infos">
        <div class="container">
            <div class="component__infos__info">
                <h1>Transformamos <strong>ideias</strong> em soluções digitais</h1>
                <p>Impulsionamos seu negócio com tecnologia de ponta, integrações inteligentes e inovação contínua.</p>
                <button>Conheça nossas soluções</button>
                <ul class="component__infos__tasks__list">
                    <li class="component__infos__tasks__list-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-cloud.png" alt="Ícone de uma nuvem de borda laranja">
                        <span>Cloud Computing</span>
                    </li>
                    <li class="component__infos__tasks__list-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-cpu.png" alt="Ícone de um cpu de borda laranja">
                        <span>Inteligência Artificial</span>
                    </li>
                    <li class="component__infos__tasks__list-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-ray.png" alt="Ícone de um raio de borda laranja">
                        <span>Integrações</span>
                    </li>
                </ul>
            </div>
            <div class="component__infos__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/employee.png" alt="Imagem de um homem falando ao microfone">
            </div>
        </div>
    </div>
    <div class="component__about">
        <div class="container">
            <div class="component__about__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/members.png" alt="Imagem dos colaboradores">
            </div>
            <div class="component__about__infos">
                <h1>Sobre a N1.AG</h1>
                <p>Somos uma empresa de tecnologia especializada em transformação digital, oferecendo soluções inovadoras que conectam estratégia de negócio com excelência técnica. Nossa equipe multidisciplinar trabalha com paixão para entregar resultados excepcionais.</p>
                <ul class="component__about__infos__list">
                    <li>
                        <p>150+</p>
                        <span>Projetos Entregues</span>
                    </li>
                    <li>
                        <p>98%</p>
                        <span>Satisfação do Cliente</span>
                    </li>
                    <li>
                        <p>5</p>
                        <span>Anos de Experiência</span>
                    </li>
                    <li>
                        <p>50+</p>
                        <span>Clientes ativos</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="component__our__values">
        <div class="container">
            <ul class="component__our__values__list">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-target.png" alt="Imagem de ícone de um alvo laranja">
                    <h4>Missão</h4>
                    <span>Democratizar o acesso à tecnologia avançada, oferecendo soluções personalizadas que impulsionam o crescimento dos nossos clientes.</span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-lamp.png" alt="Imagem de ícone de uma lampada laranja">
                    <h4>Visão</h4>
                    <span>Ser referência em inovação tecnológica, criando um futuro digital mais conectado e eficiente para empresas de todos os portes.</span>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-users.png" alt="Imagem de ícone de usuários na cor laranja">
                    <h4>Valores</h4>
                    <span>Excelência, transparência, inovação contínua e compromisso total com o sucesso dos nossos parceiros de negócio.</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="component__our__services">
        <div class="container">
            <div class="component__our__services__head">
                <h4>Nossos Serviços</h4>
                <p>Oferecemos soluções completas em tecnologia para impulsionar sua empresa rumo ao futuro digital</p>
            </div>
            <ul class="component__our__services_list">
                <li class="component__our__services--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-arrows.png" alt="Imagem de ícone setas de lado opostos">
                    <h4>Desenvolvimento</h4>
                    <p>Aplicações web e mobile modernas, escaláveis e performáticas, utilizando as tecnologias mais avançadas do mercado.</p>
                    <ul class="our__type_services">
                        <li>React/Next.js</li>
                        <li>Node.js</li>
                        <li>React Native</li>
                        <li>Progressive</li>
                    </ul>
                    <button class="button__learn__more">Saiba Mais</button>
                </li>
                <li class="component__our__services--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-database.png" alt="Imagem de ícone de banco de dados">
                    <h4>Integrações</h4>
                    <p>Conectamos seus sistemas de forma inteligente, automatizando processos e otimizando fluxos de trabalho.</p>
                    <ul class="our__type_services">
                        <li>APIs RESTful</li>
                        <li>Microserviços</li>
                        <li>Webhooks</li>
                        <li>Sincronização de dados</li>
                    </ul>
                    <button class="button__learn__more">Saiba Mais</button>
                </li>
                <li class="component__our__services--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-cloud-purple.png" alt="Imagem de uma nuvem">
                    <h4>Cloud Computing</h4>
                    <p>Migração e otimização de infraestrutura em nuvem para máxima disponibilidade e economia.</p>
                    <ul class="our__type_services">
                        <li>AWS/Azure</li>
                        <li>DevOps</li>
                        <li>Monitoramento</li>
                        <li>Backup & Recovery</li>
                    </ul>
                    <button class="button__learn__more">Saiba Mais</button>
                </li>
                <li class="component__our__services--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-gear.png" alt="Imagem de ícone de uma engrenagem">
                    <h4>Consultoria</h4>
                    <p>Estratégias personalizadas de transformação digital para acelerar seu crescimento tecnológico.</p>
                    <ul class="our__type_services">
                        <li>Auditoria técnica</li>
                        <li>Arquitetura de soluções</li>
                        <li>Metodologias ágeis</li>
                        <li>Gestão de projetos</li>
                    </ul>
                    <button class="button__learn__more">Saiba Mais</button>
                </li>
            </ul>
            <div class="component__change__your_business">
                <h4>Pronto para transformar seu negócio?</h4>
                <p>Entre em contato conosco e descubra como podemos acelerar sua jornada de transformação digital</p>
                <a href="#" target="_blanck">Conversar com especialista</a>
            </div>
        </div>
    </div>
    <div class="component__cases">
        <div class="container">
            <div class="component__cases__head">
                <h4>Cases de Sucesso</h4>
                <p>Conheça algumas das empresas que confiaram na TechInova para suas transformações digitais</p>
            </div>
           <ul class="component__cases__list">
                <li class="component__cases__list--item">
                    <div class="cases__reviews">
                        <div class="cases__reviews__container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-double-quotes.png" alt="Imagem de ícone de aspas duplas">
                            <ul class="cases__reviews__stars__list">
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                            </ul>
                        </div>
                        <i class="cases__reviews__description">"A TechInova transformou completamente nossa infraestrutura digital. O resultado foi um aumento de 300% na eficiência operacional."</i>
                        <div class="cases__reviews__customers">
                            <strong>CS</strong>
                            <h3>Carlos Silva</h3>
                            <p>CTO, InnovaCorp</p>
                            <span>InnovaCorp</span>
                        </div>
                    </div>
                </li>
                <li class="component__cases__list--item">
                    <div class="cases__reviews">
                        <div class="cases__reviews__container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-double-quotes.png" alt="Imagem de ícone de aspas duplas">
                            <ul class="cases__reviews__stars__list">
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                            </ul>
                        </div>
                        <i class="cases__reviews__description">"Profissionalismo exemplar e soluções que realmente funcionam. Nossa migração para a nuvem foi perfeita e sem interrupções."</i>
                        <div class="cases__reviews__customers">
                            <strong>AC</strong>
                            <h3>Ana Costa</h3>
                            <p>Diretora de TI, TechFlow</p>
                            <span>TechFlow</span>
                        </div>
                    </div>
                </li>
                <li class="component__cases__list--item">
                    <div class="cases__reviews">
                        <div class="cases__reviews__container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-double-quotes.png" alt="Imagem de ícone de aspas duplas">
                            <ul class="cases__reviews__stars__list">
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-star.png" alt="Imagem de ícone de uma estrela laranja">
                                </li>
                            </ul>
                        </div>
                        <i class="cases__reviews__description">"Equipe altamente qualificada que entende as necessidades do negócio. Superaram nossas expectativas em todos os aspectos."</i>
                        <div class="cases__reviews__customers">
                            <strong>RM</strong>
                            <h3>Roberto Mendes</h3>
                            <p>CEO, DataMax Solutions</p>
                            <span>DataMax</span>
                        </div>
                    </div>
                </li>
           </ul> 
        </div>
    </div>
    <div class="component__blog">
        <div class="container">
            <div class="component__blog__head">
                <h4>Insights & Blog</h4>
                <p>Fique por dentro das últimas tendências em tecnologia e transformação digital com nossos artigos especializados</p>
            </div>
            <ul class="component__blog__list">
                <li class="component__blog__list--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-code.png" alt="Imagem de uma tela mostrando um código de programação">
                    <div class="blog__user__infos">
                        <ul class="blog__user__infos__list">
                            <li class="blog__user__infos__list--item">
                                <div class="user__icon"></div>
                                <span>Maria Santos</span>
                            </li>
                            <li class="blog__user__infos__list--item">
                                <div class="calendar__icon"></div>
                                <span>10 Set 2024</span>
                            </li>
                            <li class="blog__user__infos__list--item">
                                <span>8 min</span>
                            </li>
                        </ul>
                        <h3>O Futuro do Desenvolvimento Web: Tendências para 2024</h3>
                        <p>Descubra as principais tecnologias e frameworks que estão moldando o futuro do desenvolvimento web e como se preparar para as mudanças.</p>
                        <button class="blog__button__learn__more">Ler mais</button>
                    </div>
                </li>
                <li class="component__blog__list--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-cpu-ai.png" alt="Imagem de uma tela mostrando um código de programação">
                    <div class="blog__user__infos">
                        <ul class="blog__user__infos__list">
                            <li class="blog__user__infos__list--item">
                                <div class="user__icon"></div>
                                <span>Maria Santos</span>
                            </li>
                            <li class="blog__user__infos__list--item">
                                <div class="calendar__icon"></div>
                                <span>10 Set 2024</span>
                            </li>
                            <li class="blog__user__infos__list--item">
                                <span>8 min</span>
                            </li>
                        </ul>
                        <h3>IA Generativa: Como Implementar em sua Empresa</h3>
                        <p>Um guia prático sobre como integrar inteligência artificial generativa nos processos empresariais para aumentar produtividade e inovação.</p>
                        <button class="blog__button__learn__more">Ler mais</button>
                    </div>
                </li>
                <li class="component__blog__list--item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-keyboard.png" alt="Imagem de uma tela mostrando um código de programação">
                    <div class="blog__user__infos">
                        <ul class="blog__user__infos__list">
                            <li class="blog__user__infos__list--item">
                                <div class="user__icon"></div>
                                <span>Maria Santos</span>
                            </li>
                            <li class="blog__user__infos__list--item">
                                <div class="calendar__icon"></div>
                                <span>10 Set 2024</span>
                            </li>
                            <li class="blog__user__infos__list--item">
                                <span>8 min</span>
                            </li>
                        </ul>
                        <h3>Segurança em Cloud: Melhores Práticas e Estratégias</h3>
                        <p>Aprenda as estratégias essenciais para manter seus dados seguros na nuvem e implementar uma política de segurança robusta.</p>
                        <button class="blog__button__learn__more">Ler mais</button>
                    </div>
                </li>
            </ul>
            <div class="component__blog__redirect">
                 <a href="#" class="component__blog__redirec--articles">Ver todos os artigos</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>