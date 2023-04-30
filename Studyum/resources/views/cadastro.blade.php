<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{url('css/templates/css-reset.css')}}" />
        <link rel="stylesheet" href="{{url('css/login-cadastro/cadastro.css')}}" />
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
            <div class="content-box">
                <div class="form-box">
                    <div class="logo">
                        <img
                            src="{{url('images/templates/Logo.svg')}}"
                            alt="logoStudyum"
                        />
                    </div>

                    <h2>Cadastro</h2>

                    <form action="/cadastro" method="post">
                        @csrf
                        <div class="input-box">
                            <input type="name" name="name" placeholder="Nome" />
                        </div>

                        <div class="input-box">
                            <input type="date" />
                        </div>

                        <div class="input-box">
                            <input type="email" name="email" placeholder="E-mail" />
                        </div>

                        <div class="input-box">
                            <input type="password" name="password" placeholder="Senha" />
                        </div>

                        <div class="input-box">
                            <input type="password" placeholder="Confirme a senha" />
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Cadastrar" />
                        </div>

                        <div class="input-box">
                            <p>
                                Já possui uma conta?
                                <a href="/login">Fazer login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="img-box">
                <img src="{{url('images//cadastro/Cadastro.svg')}}" />
            </div>
        </div>
    </body>
</html>
