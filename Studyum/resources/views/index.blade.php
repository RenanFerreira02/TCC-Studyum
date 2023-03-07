<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style-home.css')}}" />
    <title>Home</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="{{url('images/logo.svg')}}" alt="" />
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="/sobre" class="sobre-home">Sobre</a></li>

                    <li><a href="" class="entrar-cadastrar">Entrar</a></li>

                    <li>
                        <a href="" class="entrar-cadastrar">Cadastrar</a>
                    </li>
                </ul>
            </nav>
        </header>


        <main>
            <section class="main">
                <div class="main-presentation">
                    
                    <div class="main-text">
                        <p>
                            Texto interativo do próprio site.
                        </p>
                        
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Nulla explicabo inventore
                            provident eaque ipsum ex culpa corrupti
                            repellendus rem, veritatis, error odio corporis
                            sequi? Veniam distinctio quibusdam illo omnis
                            nisi?
                        </p>
                    </div>

                    <div class="main-svg">
                        <img src="{{url('images/main.svg')}}" alt="" />
                    </div>
                </div>
            </section>

            <section class="subjects">
                 <div class="about-devs-presentation">
                    <img src="{{url('images/about-waves.svg')}}" alt="" width="100%" height="200px" />
                </div>

                <div class="subjects-title">
                    <h1>Matérias</h1>
                </div>
            <!--
                <div class="image-subjects">
                    <img src="{{url('images/exatas.svg')}}" alt="" />
                    <img src="{{url('images/biologicas.svg')}}" alt="" />
                    <img src="{{url('images/humanas.svg')}}" alt="" />
                    <img src="{{url('images/linguagens.svg')}}" alt="" />
                </div>

                <div class="text-subjects">
                    <h1>Exatas</h1>
                    <h1>Biológicas</h1>
                    <h1>Humanas</h1>
                    <h1>Linguagens</h1>
                </div> -->

                <div class="subjects-container">
                    <div class="subject-test">
                        <div class="subject-image">
                            <img src="{{url('images/exatas.svg')}}" alt="">
                        </div>
                        
                        <div class="subject-title">
                            <h1>Exatas</h1>

                            <p>Essa seção contém lorem</p>
                        </div>
                    </div>

                    <div class="subject-test">
                        <div class="subject-image">
                            <img src="{{url('images/biologicas.svg')}}" alt="">
                        </div>
                        
                        <div class="subject-title">
                            <h1>Biológicas</h1>

                            <p>Essa seção contém lorem</p>
                        </div>
                    </div>
                    <div class="subject-test">
                        <div class="subject-image">
                            <img src="{{url('images/humanas.svg')}}" alt="">
                        </div>
                        
                        <div class="subject-title">
                            <h1>Humanas</h1>

                            <p>Essa seção contém lorem</p>
                        </div>
                    </div>
                    <div class="subject-test">
                        <div class="subject-image">
                            <img src="{{url('images/linguagens.svg')}}" alt="">
                        </div>
                        
                        <div class="subject-title">
                            <h1>Linguagens</h1>

                            <p>Essa seção contém lorem</p>
                        </div>
                    </div>
                </div>

            </section>

        </main>

    </div>
</body>

</html>