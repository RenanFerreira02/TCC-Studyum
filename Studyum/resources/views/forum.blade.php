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
        <link rel="stylesheet" href="{{url('css/platform/forum.css')}}" />
        <link rel="stylesheet" href="{{url('css/templates/css-reset.css')}}" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Forum</title>
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

                <li class="active">
                    <a href="/forum">
                        <i class="bx bx-conversation bx-sm"></i>

                        <span class="text">Fórum</span>
                    </a>
                </li>

                <li>
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
                        <h1>Fórum</h1>
                    </div>
                </div>

                <div class="m-auto mt-1 grid w-4/5 gap-4 md:grid-cols-2 lg:grid-cols-2">
                    <div class="w-[110%]">
                        <div class="flex justify-end rounded-[20px] bg-white shadow-xl">
                            <a href="">
                                <img
                                    class="w-[40px] pr-[10px] py-[15px]"
                                    src="{{url('images/dashboard/button adicionar.png')}}"
                                />
                            </a>
                        </div>
                    </div>

                    <div class="topics-container row-span-6 w-3/4 ml-[45%] bg-white rounded-[20px] flex justify-center  shadow-xl">
                        <h1 class="assuntos mt-2">Assuntos</h1>
                    </div>

                    <div class="bg-white flex rounded-[10px] w-[110%] shadow-xl">
                        <div class="w-2/3 p-3">
                            <img src="{{url('images/templates/Avatar.svg')}}" alt="">
                        </div>
                        <p class="py-3 pr-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis itaque commodi voluptatem facere officiis corrupti, ipsa nulla a esse suscipit repellat vero voluptatibus qui earum adipisci error maxime dolore id!</p>
                    </div>

                    <div class="bg-white flex rounded-[10px] w-[110%] shadow-xl">
                        <div class="w-2/3 p-3">
                            <img src="{{url('images/templates/Avatar.svg')}}" alt="">
                        </div>
                        <p class="py-3 pr-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis itaque commodi voluptatem facere officiis corrupti, ipsa nulla a esse suscipit repellat vero voluptatibus qui earum adipisci error maxime dolore id!</p>
                    </div>

                    <div class="bg-white flex rounded-[10px] w-[110%] shadow-xl">
                        <div class="w-2/3 p-3">
                            <img src="{{url('images/templates/Avatar.svg')}}" alt="">
                        </div>
                        <p class="py-3 pr-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis itaque commodi voluptatem facere officiis corrupti, ipsa nulla a esse suscipit repellat vero voluptatibus qui earum adipisci error maxime dolore id!</p>
                    </div>

                                  
                </div>
            </main>
            <!-- MAIN -->
        </section>
        <!-- CONTENT -->

        <script src="{{url('scripts/dashboard/sidebar.js')}}"></script>
    </body>
</html>
