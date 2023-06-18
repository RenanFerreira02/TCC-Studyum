<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/header-nav.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('css/landing-page-about/landing-page.css') }}" />
    <title>Home</title>
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
                    <li><a href="/sobre" class="home-sobre">Sobre</a></li>

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
            <section class="main">
                <div class="main-presentation">
                    <div class="main-text">
                        <h1>Bem vindo ao Studyum!</h1>

                        <p>
                            Descubra uma plataforma, que irá te ajudar a
                            superar os desafios do Ensino Médio de forma
                            interativa, dinâmica e efetiva, venha conosco e
                            aproveite o conhecimento.
                        </p>
                    </div>

                    <div class="main-svg">
                        <img src="{{ url('images/landing-page/main.svg') }}" alt="" />
                    </div>
                </div>
            </section>

            <section class="subjects">
                <div class="waves">
                    <img src="{{ url('images/templates/waves.svg') }}" alt="" width="100%" height="200px" />
                </div>

                <div class="subjects-title">
                    <h1>Matérias</h1>
                </div>

                <div class="subjects-container">
                    <div class="subject">
                        <div class="subject-image">
                            <img src="{{ url('images/landing-page/exatas.svg') }}" alt="" />
                        </div>

                        <div class="subject-name">
                            <h1>Exatas</h1>

                            <p>Matemática, Física e Química</p>
                        </div>
                    </div>

                    <div class="subject">
                        <div class="subject-image">
                            <img src="{{ url('images/landing-page/biologicas.svg') }}" alt="" />
                        </div>

                        <div class="subject-name">
                            <h1>Biológicas</h1>

                            <p>Biologia geral, Química</p>
                        </div>
                    </div>
                    <div class="subject">
                        <div class="subject-image">
                            <img src="{{ url('images/landing-page/humanas.svg') }}" alt="" />
                        </div>

                        <div class="subject-name">
                            <h1>Humanas</h1>

                            <p>
                                História, Geografia, Filosofia e Sociologia
                            </p>
                        </div>
                    </div>
                    <div class="subject">
                        <div class="subject-image">
                            <img src="{{ url('images/landing-page/linguagens.svg') }}" alt="" />
                        </div>

                        <div class="subject-name">
                            <h1>Linguagens</h1>

                            <p>Língua Portuguesa e Redação</p>
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
                            Nenhum caminho é longo demais quando a educação
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
