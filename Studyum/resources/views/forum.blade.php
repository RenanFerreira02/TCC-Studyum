<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/platform/platform.css') }}" />
    <link rel="stylesheet" href="{{ url('css/platform/forum.css') }}" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Forum</title>
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
                    <h1>Fórum</h1>
                </div>
            </div>

            <div class="m-auto mt-1 grid w-4/5 gap-4 md:grid-cols-2 lg:grid-cols-2">
                <div class="w-[110%]">
                    <div class="flex justify-end border-2 border-gray rounded-[5px] bg-white ">
                        <a href="">
                            <img class="w-[45px] pr-[10px] py-[5px]" src="{{ url('images/dashboard/add.svg') }}" />
                        </a>
                    </div>
                </div>

                <div class="topics-container row-span-3 w-3/4 ml-[45%] bg-white rounded-[20px] text-center  shadow-xl">
                    <h1 class="assuntos mt-2">Assuntos</h1>

                    <ul class="mt-15">
                        <li class="mt-5">Biologia</li>
                        <li class="mt-5">Filosofia</li>
                        <li class="mt-5">Física</li>
                        <li class="mt-5">Geografia</li>
                        <li class="mt-5">História</li>
                        <li class="mt-5">Língua Portuguesa</li>
                        <li class="mt-5">Matemática</li>
                        <li class="mt-5">Química</li>
                        <li class="mt-5">Sociologia</li>
                        <li class="mt-5">Inglês</li>
                    </ul>
                </div>

                <div class="bg-white flex  rounded-[10px] w-[110%] border-2 border-gray">
                    <div class="w-2/3 p-3">
                        <img src="{{ url('images/dashboard/Avatar.svg') }}" alt="" class="w-[50px]">
                    </div>

                    <p class="py-3 pr-14 text-left">
                        Olá pessoal, <br /> <br />

                        Estou enfrentando uma dificuldade na disciplina de matemática
                        e gostaria de pedir a ajuda de vocês. Durante as últimas aulas, estudei sobre Progressão
                        Aritmética e Geométrica estou com difiuldades para aplicar essas fórmulas em problemas, alguém
                        conseguiria me ajudar?
                    </p>
                </div>

                <div class="bg-white flex rounded-[10px] w-[110%] border-2 border-gray">
                    <div class="w-2/3 p-3">
                        <img src="{{ url('images/dashboard/Avatar2.svg') }}" alt="" class="w-[50px]">
                    </div>

                    <p class="py-3 pr-14 text-left">
                        Olá a todos, <br /> <br />

                        Estou enfrentando uma dificuldade específica na disciplina de física
                        da 1ª Série e gostaria de pedir a ajuda de vocês. Durante as últimas aulas, estudamos o tópico
                        sobre Velocidade e embora eu tenha compreendido a teoria e os conceitos básicos, estou
                        encontrando dificuldades na aplicação prática desses conhecimentos.
                    </p>
                </div>

                <div class="bg-white flex rounded-[10px] w-[110%] border-2 border-gray">
                    <div class="w-2/3 p-3">
                        <img src="{{ url('images/dashboard/Avatar3.svg') }}" alt="" class="w-[50px]">
                    </div>
                    <p class="py-3 pr-14 text-left">
                        Sou aluno do Fundamental II e estou com uma dúvida em relação à interpretação de um texto na
                        disciplina de Português. Gostaria de pedir a ajuda de vocês para me auxiliarem a compreender
                        melhor o significado desse texto. A minha pergunta é a seguinte:
                        <br /> <br />
                        No meu material didático, encontrei um texto intitulado "Onde estão as chaves?" e estou tendo
                        dificuldades em interpretá-lo completamente. Embora eu tenha uma noção geral sobre o assunto
                        abordado, sinto que ainda não captei todos os detalhes e a mensagem principal transmitida.
                    </p>
                </div>


            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="{{ url('scripts/dashboard/sidebar.js') }}"></script>
</body>

</html>
