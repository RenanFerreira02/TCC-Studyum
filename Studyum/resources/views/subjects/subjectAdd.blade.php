<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/platform/platform.css') }}" />
    <link rel="stylesheet" href="{{ url('css/platform/subjects.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Adicionar Conteúdo</title>
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
                {{--
                    <a href="#" class="notification">
                        <i class="bx bxs-bell bx-tada-hover"></i>

                        <span class="num">8</span>
                    </a>
                    --}}

                <a href="/profile" class="profile">
                    <img src="{{ url('images/templates/Avatar.svg') }}" />
                </a>
            </div>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Inserir Conteúdo</h1>
                </div>
            </div>

            <div class="form">
                <form action="/{{ $conteudoMateria->idMateriaSerie }}/adicionar" method="post" id="insertContent">
                    @csrf
                    <div class="cabecalho">
                        <div class="titulo">
                            <label class="input-label" for="titulo">
                                Título do conteúdo:
                            </label>

                            <input class="input-box" type="text" id="titulo" name="titulo" required />
                        </div>

                        <div class="materiaSerie">
                            <label class="input-label" for="materiaSerie">
                                Matéria/Série:
                            </label>

                            <select class="input-box" id="materiaSerie" name="materiaSerie">
                                @foreach ($conteudo as $c)
                                    <option class="input-label" value="{{ $c->idMateriaSerie }}"
                                        {{ $c->idMateriaSerie == $conteudoMateria->idMateriaSerie ? 'Selected' : '' }}>
                                        {{ $c->materia }} - {{ $c->serie }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <x-tinymce.tinymce-editor />

                    <input type="submit" value="Enviar conteúdo"'>
                </form>
            </div>
        </main>
    </section>

    <script src="{{ url('scripts/dashboard/sidebar.js') }}"></script>
    <x-tinymce.tinymce-config />
    <script src="{{ url('scripts/modals/createModal.js') }}"></script>
</body>

</html>
