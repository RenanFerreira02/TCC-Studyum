<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{url('css/dashboard/materias.css')}}" />
        <link rel="stylesheet" href="{{url('css/dashboard/dashboard.css')}}" />
        <link rel="stylesheet" href="{{url('css/templates/css-reset.css')}}" />
        <link
            rel="stylesheet"
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        />
        <title>Matérias</title>
    </head>
    <body>
        <section id="sidebar">
            <ul class="side-menu top">
                <li>
                    <a href="/dashboard">
                        <i class="bx bxs-dashboard bx-sm"></i>

                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <li class="active">
                    <a href="/materias">
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
                    <a href="/profile">
                        <i class="bx bxs-cog bx-sm bx-spin-hover"></i>

                        <span class="text">Configurações</span>
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a
                            href="route('logout')"
                            class="logout"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                        >
                            <i class="bx bxs-log-out-circle bx-sm"></i>

                            <span class="text">Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </section>

        <section id="content">
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

                    <a href="/profile" class="profile">
                        <img src="{{url('images/templates/Avatar.svg')}}" />
                    </a>
                </div>
            </nav>

            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Matemática - 1ª série</h1>
                    </div>
                </div>
            </main>
        </section>

        <section class="container2">
            <div class="content2">
                <div class="cards">
                    <div class="card">
                        <div class="box"></div>
                    </div>

                  
                </div>
            </div>
        </section>
        <script src="{{url('scripts/dashboard/materias.js')}}"></script>
        <script src="{{url('scripts/dashboard/dashboard.js')}}"></script>
    </body>
</html>