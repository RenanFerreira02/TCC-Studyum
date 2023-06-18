<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/header-nav.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('css/landing-page-about/about.css') }}" />
    <title>Sobre</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <a href="/">
                    <img src="{{ url('images/templates/logo.svg') }}" alt="" />
                </a>
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="/" class="home-sobre">Home</a></li>

                    <li>
                        <a href="{{ route('login') }}" class="entrar-cadastrar">
                            Entrar
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('register') }}" class="entrar-cadastrar">
                            Cadastrar
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="about">
                <div class="about-presentation">
                    <div class="about-svg">
                        <img src="{{ url('images/about/about.svg') }}" alt="" />
                    </div>

                    <div class="about-text">
                        <p>
                            O Studyum é uma projeto desenvolvido por alunos
                            da ETEC Camargo Aranha afim de ajudar alunos,
                            pensando em como podem evoluir na
                            forma de aprender e armazenar conteúdos de forma prática e intuitiva.
                        </p>
                    </div>
                </div>
            </section>

            <section class="about-devs">
                <div class="waves">
                    <img src="{{ url('images/templates/waves.svg') }}" alt="" width="100%" height="200px" />
                </div>

                <div class="about-devs-presentation">
                    <div class="about-devs-title">
                        <h1>Desenvolvedores</h1>
                    </div>

                    <div class="about-devs-box">
                        <div class="about-devs-text">
                            <h3>
                                Os desenvolvedores do Studyum também são
                                alunos!
                            </h3>

                            <p>
                                Durante a elaboração do projeto, foi levado
                                em consideração o ambiente da ETEC e como
                                nós alunos poderíamos ajudar a contribuir no
                                aprendizado de todos. Conheça um pouco sobre
                                cada desenvolvedor abaixo.
                            </p>
                        </div>

                        <div class="about-devs-image">
                            <img src="{{ url('images/about/about-devs.svg') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="dev-container">
                    <div class="dev">
                        <div class="dev-image">
                            <img src="{{ url('images/about/nan.png') }}" alt="" />
                        </div>

                        <div class="dev-name">
                            <h1>Renan Kaique F. Ferreira</h1>

                            <p>Desenvolvedor Full-Stack</p>
                        </div>
                    </div>

                    <div class="dev">
                        <div class="dev-image">
                            <img src="{{ url('images/about/daniel.png') }}" alt="" />
                        </div>

                        <div class="dev-name">
                            <h1>Daniel Baldez Chagas</h1>

                            <p>Desenvolvedor Back-End</p>
                        </div>
                    </div>
                    <div class="dev">
                        <div class="dev-image">
                            <img src="{{ url('images/about/isa.png') }}" alt="" />
                        </div>

                        <div class="dev-name">
                            <h1>Isabela Auta da Costa</h1>

                            <p>Desenvolvedora Front-End</p>
                        </div>
                    </div>
                    <div class="dev">
                        <div class="dev-image">
                            <img src="{{ url('images/about/kayo.png') }}" alt="" />
                        </div>

                        <div class="dev-name">
                            <h1>Kayo Lacerda Martins Lima</h1>

                            <p>Desenvolvedor Front-End</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="footer-container">
                <div class="footer-column">
                    <div class="footer-logo">
                        <img src="{{ url('images/templates/logo.svg') }}" alt="" />
                    </div>

                    <div class="footer-slogan">
                        <p>Que o aprendizado vire rotina.</p>

                        <br />

                        <p>
                            Nenhume caminho é longo demais quando a educação
                            nos acompanha.
                        </p>
                    </div>
                </div>

                <div class="footer-column-contact">
                    <div class="footer-contact">
                        <h1>Contato</h1>
                    </div>

                    <div class="footer-contact-devs">
                        <div class="dev-name">
                            <span>Daniel Baldez Chagas</span>
                        </div>

                        <div class="dev-contacts">
                            <a href="https://github.com/Baldez27">
                                <img src="{{ url('images/icons/github-icon.svg') }}" alt="Github" />
                            </a>

                            <a href="https://www.instagram.com/danbaldez27">
                                <img src="{{ url('images/icons/instagram-icon.svg') }}" alt="Instagram" />
                            </a>

                            <a href="mailto:danielbaldez2000@gmail.com">
                                <img src="{{ url('images/icons/email-icon.svg') }}" alt="E-mail" />
                            </a>
                        </div>

                        <div class="dev-name">
                            <span>Isabela Vitoria Auta da Costa</span>
                        </div>

                        <div class="dev-contacts">
                            <a href="https://github.com/MinCoffee98">
                                <img src="{{ url('images/icons/github-icon.svg') }}" alt="Github" />
                            </a>

                            <a href="https://www.instagram.com/cafeinapura98">
                                <img src="{{ url('images/icons/instagram-icon.svg') }}" alt="Instagram" />
                            </a>

                            <a href="mailto:isabelavr58@gmail.com">
                                <img src="{{ url('images/icons/email-icon.svg') }}" alt="E-mail" />
                            </a>
                        </div>

                        <div class="dev-name">
                            <span>Kayo Lacerda Martins Lima</span>
                        </div>

                        <div class="dev-contacts">
                            <a href="https://github.com/KayoMartins2405">
                                <img src="{{ url('images/icons/github-icon.svg') }}" alt="Github" />
                            </a>

                            <a href="https://www.instagram.com/kayomartins_2424">
                                <img src="{{ url('images/icons/instagram-icon.svg') }}" alt="Instagram" />
                            </a>

                            <a href="mailto:martinslima2424@gmail.com">
                                <img src="{{ url('images/icons/email-icon.svg') }}" alt="E-mail" />
                            </a>
                        </div>

                        <div class="dev-name">
                            <span>Renan Kaique Fontes Ferreira</span>
                        </div>

                        <div class="dev-contacts">
                            <a href="https://github.com/RenanFerreira02">
                                <img src="{{ url('images/icons/github-icon.svg') }}" alt="Github" />
                            </a>

                            <a href="https://www.instagram.com/nancrazy02">
                                <img src="{{ url('images/icons/instagram-icon.svg') }}" alt="Instagram" />
                            </a>

                            <a href="mailto:renankferreira01@gmail.com">
                                <img src="{{ url('images/icons/email-icon.svg') }}" alt="E-mail" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
