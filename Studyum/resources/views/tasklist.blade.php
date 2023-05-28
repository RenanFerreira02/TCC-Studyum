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
        <link rel="stylesheet" href="{{url('css/platform/platform.css')}}" />
        <link rel="stylesheet" href="{{url('css/platform/tasks.css')}}" />
        <link rel="stylesheet" href="{{url('css/templates/css-reset.css')}}" />
        <title>Lista de Tarefas</title>
    </head>
    <body>
        <!-- SIDEBAR -->
        <section id="sidebar">
            <ul class="side-menu top">
                <li>
                    <a href="/dashboard">
                        <i class="bx bxs-dashboard bx-sm"></i>

                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/materias">
                        <i class="bx bx-book-open bx-sm"></i>

                        <span class="text">Matérias</span>
                    </a>
                </li>

                <li>
                    <a href="/forum">
                        <i class="bx bx-conversation bx-sm"></i>

                        <span class="text">Fórum</span>
                    </a>
                </li>

                <li class="active">
                    <a href="/tarefas">
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

                            <span class="text">Log out</span>
                        </a>
                    </form>
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

                    <span>Bem vindo, {{ Auth::user()->name }}</span>
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
            <!-- NAVBAR -->

            <!-- MAIN -->
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>Lista de tarefas</h1>
                    </div>
                </div>
            </main>
            <!-- MAIN -->
        </section>
        <!-- CONTENT -->

        <section class="container1">
            <div class="content1">
                <h1 class="serie">A Fazer</h1>
                <div class="cards">
                    <div class="card">
                        <div class="box"></div>
                    </div>

                    <div class="card">
                        <div class="box"></div>
                    </div>

                    <div class="card">
                        <div class="box"></div>
                    </div>

                    <div class="add1">
                        <div class="box">
                            <a href="check">
                                <img
                                    src="{{url('images/dashboard/check.png')}}"
                                    alt="btn"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container2">
            <div class="content2">
                <h1 class="serie">Fazendo</h1>

                <div class="cards">
                    <div class="card">
                        <div class="box"></div>
                    </div>

                    <div class="card">
                        <div class="box"></div>
                    </div>

                    <div class="add2">
                        <div class="box">
                            <a href="check">
                                <img
                                    src="{{url('images/dashboard/check.png')}}"
                                    alt="btn"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container3">
            <div class="content3">
                <h1 class="serie">Feito</h1>

                <div class="cards">
                    <div class="card">
                        <div class="box"></div>
                    </div>
                </div>

                <div class="cards">
                    <div class="add3">
                        <div class="box">
                            <a href="check">
                                <img
                                    src="{{url('images/dashboard/check.png')}}"
                                    alt="btn"
                                />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{url('scripts/dashboard/sidebar.js')}}"></script>
    </body>
</html>
