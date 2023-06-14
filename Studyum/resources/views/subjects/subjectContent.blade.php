<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/templates/platform-reset.css') }}" />

    <link rel="stylesheet" href="{{ url('css/platform/subjectContent.css') }}" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Conteúdo</title>
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
                    @foreach ($conteudoMateria as $sc)
                        <h1>
                            {{ $nomeMateriaSerie->materia }} -
                            {{ $nomeMateriaSerie->serie }} -
                            {{ $sc->tituloConteudo }}
                        </h1>
                    @endforeach
                </div>
            </div>

            <div class="conteudo_materia">
                <div class="content2">
                    @foreach ($conteudoMateria as $sc)
                        <div class="update-delete">
                            <div class="update">
                                <a href="/materias/{{ $sc->idMateriaSerie }}/{{ $sc->id }}/editar">
                                    <i class='bx bxs-edit bx-md'></i>
                                </a>
                            </div>

                            <div class="delete">
                                <a href="/{{ $sc->id }}/apagar">
                                    <button type="button" onclick="confirmExclusao(event)" style="border: none">
                                        <i class='bx bxs-trash bx-md'></i>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="conteudo">
                            {!! $sc->conteudo !!}
                        </div>
                    @endforeach
                </div>
            </div>
        </main>
    </section>

    <script src="{{ url('scripts/dashboard/sidebar.js') }}"></script>
    <script src="{{ url('scripts/modals/deleteModal.js') }}"></script>
</body>

</html>
