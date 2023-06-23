<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/platform/platform.css') }}" />
    <link rel="stylesheet" href="{{ url('css/platform/subjects.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
    <title>Conteúdos</title>
</head>

<body>
    <section id="sidebar">
        <ul class="side-menu top">
            <li class="active">
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

                    <a href="route('logout')" class="logout"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="bx bxs-log-out-circle bx-sm"></i>

                        <span class="text">Log out</span>
                    </a>
                </form>
            </li>
        </ul>
    </section>

    <section id="content">
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

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>
                        {{ $nomeMateriaSerie->materia }} - {{ $nomeMateriaSerie->serie }}
                    </h1>
                </div>
            </div>
        </main>
    </section>

    <section id="content" class="container2">
        <div class="content2">
            <div class="cards">
                @foreach ($materiaSerie as $ms)
                    <a href="/materias/{{ $ms->idMateriaSerie }}/{{ $ms->id }}">
                        <button class="card">
                            <div class="box">
                                <div class="nomeMateria">
                                    <p>{{ $ms->tituloConteudo }}</p>
                                </div>
                            </div>
                        </button>
                    </a>
                @endforeach

                <a href="/{{ $nomeMateriaSerie->idMateriaSerie }}/adicionar">
                    <button class="card">
                        <div class="box">
                            <div class="nomeMateria">
                                <i class="bx bx-book-add bx-lg"></i>
                            </div>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <script src="{{ url('scripts/dashboard/sidebar.js') }}"></script>
</body>

</html>
