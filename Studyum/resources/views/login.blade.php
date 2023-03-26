<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{url('css/css-reset.css')}}" />
        <link rel="stylesheet" href="{{url('css/login.css')}}" />
        <title>Login</title>
    </head>

    <body>
        <div class="container-login">
            <div class="img-box">
                <img src="{{url('images/Login.svg')}}" />
            </div>
            
            <div class="content-box">
                <div class="form-box">
                    <img
                        src="{{url('images/Logo.svg')}}"
                        alt="logoStudyum"
                        class="logo"
                    />

                    <h2>Login</h2>

                    <form>
                        <div class="input-box">
                            <span></span>
                            <input type="email" placeholder="E-mail" />
                        </div>

                        <div class="input-box">
                            <span></span>
                            <input type="password" placeholder="Senha" />
                        </div>

                        <div class="remember">
                            <label>
                                <input type="checkbox" /> Lembrar-me
                            </label>
                            <a href="#">Esqueceu a Senha?</a>
                        </div>

                        <div class="input-box">
                            <input type="submit" placeholder="Entrar" />
                        </div>

                        <ul class="ul">
                            <li>
                                <img src="{{url('images/google-logo.png')}}" />
                            </li>
                        </ul>
                        <div class="input-box">
                            <p>
                                Ainda não tem uma conta?
                                <a href="/cadastro">Cadastrar</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
