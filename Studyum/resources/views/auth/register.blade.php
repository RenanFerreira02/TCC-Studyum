<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('css/templates/css-reset.css') }}" />
    <link rel="stylesheet" href="{{ url('css/login-register/register.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Cadastro</title>
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
        <div class="content-box">
            <div class="form-box">
                <div class="logo">
                    <img src="{{ url('images/templates/Logo.svg') }}" alt="logoStudyum" />
                </div>

                <h2>Cadastro</h2>

                <form action="{{ route('register') }}" method="post" id="register">
                    @csrf
                    <div class="input-box">
                        <input type="text" name="name" placeholder="Nome" required />

                        <x-input-error-register :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <input type="email" name="email" placeholder="E-mail" required />

                        <x-input-error-register :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" placeholder="Senha" required />

                        <x-input-error-register :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <input type="password" name="password_confirmation" placeholder="Confirme a senha" />

                        <x-input-error-register :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Cadastrar" action="{{ __('Register') }}" />
                    </div>

                    <div class="input-box">
                        <p>
                            Já possui uma conta?
                            <a href="{{ route('login') }}">Fazer login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="img-box">
            <img src="{{ url('images/cadastro/Cadastro.svg') }}" />
        </div>
    </div>

</body>

</html>
