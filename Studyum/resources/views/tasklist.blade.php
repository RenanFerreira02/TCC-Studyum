<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/platform/platform.css') }}" />
    <link rel="stylesheet" href="{{ url('css/platform/tasks.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lista de Tarefas</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <ul class="side-menu top">
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

                    <a href="route('logout')" class="logout"
                        onclick="event.preventDefault(); this.closest('form').submit();">
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
                {{-- <a href="#" class="notification">
                        <i class="bx bxs-bell bx-tada-hover"></i>

                        <span class="num">8</span>
                    </a> --}}

                <a href="/profile" class="profile">
                    <img src="{{ url('images/templates/Avatar.svg') }}" />
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

            <div class="m-auto mt-2 grid w-[90%] gap-24 md:grid-cols-3 lg:grid-cols-3 justify-items-center">
                <div class="A-fazer w-full text-center">
                    <h3 class="text-xl">A Fazer</h3>

                    <div class="bg-white flex rounded-[10px] m-2 border-2 border-gray py-10">
                        <p class="py-3 px-5 text-justify">Praticar redação - ENEM</p>
                    </div>

                    <div class="bg-white flex rounded-[10px] m-2 border-2 border-gray py-10">
                        <p class="py-3 px-5 text-justify">Estudar Progressão Aritmética e Geométrica</p>
                    </div>

                    <div class="m-2">
                        <div class="flex justify-center rounded-[20px] bg-white shadow-xl">
                            <a href="">
                                <img class="w-[45px] py-[10px]" src="{{ url('images/dashboard/task.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="A-fazer w-full text-center">
                    <h3 class="text-xl">Fazendo</h3>

                    <div class="bg-white flex rounded-[10px] m-2 border-2 border-gray py-10">
                        <p class="py-3 px-5 text-justify">Estudar Geografia</p>
                    </div>

                    <div class="bg-white flex rounded-[10px] m-2 border-2 border-gray py-10">
                        <p class="py-3 px-5 text-justify">Compra de materiais</p>
                    </div>

                    <div class="bg-white flex rounded-[10px] m-2 border-2 border-gray py-10">
                        <p class="py-3 px-5 text-justify">Revisar História</p>
                    </div>

                    <div class="m-2">
                        <div class="flex justify-center rounded-[20px] bg-white shadow-xl">
                            <a href="">
                                <img class="w-[45px] py-[10px]" src="{{ url('images/dashboard/task.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="A-fazer w-full text-center">
                    <h3 class="text-xl">Concluído</h3>

                    <div class="bg-white flex rounded-[10px] m-2 border-2 border-gray py-10">
                        <p class="py-3 px-5 text-justify">Física - Energia</p>
                    </div>

                    <div class="m-2">
                        <div class="flex justify-center rounded-[20px] bg-white shadow-xl">
                            <a href="">
                                <img class="w-[45px] py-[10px]" src="{{ url('images/dashboard/task.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="{{ url('scripts/dashboard/sidebar.js') }}"></script>
</body>

</html>
