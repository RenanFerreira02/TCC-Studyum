<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Boxicons -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{url('css/dashboard/forum.css')}}" />
        <link rel="stylesheet" href="{{url('css/templates/css-reset.css')}}" />
        <title>Forum</title>
    </head>
    <body>
        <!-- SIDEBAR -->
        <section id="sidebar">
            <ul class="side-menu top">
                <li class="active">
                    <a href="#">
                        <i class="bx bxs-dashboard bx-sm"></i>

                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-book-open bx-sm"></i>

                        <span class="text">Matérias</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-conversation bx-sm"></i>

                        <span class="text">Fórum</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-task bx-sm"></i>

                        <span class="text">Lista de Tarefas</span>
                    </a>
                </li>
            </ul>

            <ul class="side-menu">
                <li>
                    <a href="#">
                        <i class="bx bxs-cog bx-sm bx-spin-hover"></i>

                        <span class="text">Configurações</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="logout">
                        <i class="bx bxs-log-out-circle bx-sm"></i>

                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- SIDEBAR -->

        <!-- CONTENT -->
        <section id="content">
            <!-- NAVBAR -->
            <nav>
                <div class="left">
                    <i class="bx bx-menu bx-sm"></i>

                    <span>Bem vindo, Renan</span>
                </div>

                <div class="right">
                    <a href="#" class="notification">
                        <i class="bx bxs-bell bx-tada-hover"></i>

                        <span class="num">8</span>
                    </a>

                    <a href="#" class="profile">
                        <img src="{{url('images/templates/Avatar.svg')}}" />
                    </a>
                </div>
            </nav>
            <!-- NAVBAR -->

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1></h1>
                    </div>
                </div>
            </main>
            <!-- MAIN -->
        </section>
        <!-- CONTENT -->





        <section class="container2">
            <div class="content2">
                <div class="cards">
            
                    <div class="card">
                
                        <div class="box">
                            <p class="assuntos">Assuntos</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container3">
            <div class="content3">
                <div class="cards">
                
                    <div class="card">
                            
                        <div class="box">
                            <h3> Titulo do Post</h3><br>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                        </div>
                    </div>

                    <div class="card">
                            
                        <div class="box">
                            <h3> Titulo do Post</h3><br>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat aliquet maecenas ut sit nulla</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{url('scripts/dashboard/forum.js')}}"></script>
    </body>
</html>
