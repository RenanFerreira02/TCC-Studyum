<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    <link rel="stylesheet" href="{{ url('css/login-register/login.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>

<body>
    <div class="header">
        <nav class="menu">
            <ul>
                <li><a href="/" class="home-sobre">Home</a></li>
                <li><a href="/sobre" class="home-sobre">Sobre</a></li>
            </ul>
        </nav>
    </div>

    <div class="container-login">
        <div class="img-box">
            <img src="{{ url('images/login/Login.svg') }}" />
        </div>

        <div class="content-box">
            <div class="form-box">
                <div class="logo">
                    <img src="{{ url('images/templates/Logo.svg') }}" alt="logoStudyum" />
                </div>

                <h2>Login</h2>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-box">
                        <input type="email" name="email" placeholder="E-mail" />

                        <x-input-error-login :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" placeholder="Senha" />

                        <x-input-error-login :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="remember">
                        <!-- <label>
                                <input type="checkbox" /> Lembrar-me
                            </label> -->
                        <a href="{{ route('password.request') }}">Esqueceu a Senha?</a>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Entrar" action="{{ __('Log in') }}" />
                    </div>

                    <!-- <div class="input-box">
                            <p>Ou</p>
                            <img
                                src="{{ url('images/icons/btn_google_signin.png') }}"
                                class="other-login"
                            />
                        </div> -->

                    <div class="input-box">
                        <p>
                            Ainda não tem uma conta?
                            <a href="{{ route('register') }}">Cadastrar</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
