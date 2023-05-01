@if (session('alert'))
    <h4>{{session('alert')}}</h4>
@endif

<div class="form-box">
                    <div class="logo">
                        <img
                            src="{{url('images/templates/Logo.svg')}}"
                            alt="logoStudyum"
                        />
                    </div>

                    <h2>Cadastro</h2>

                    <form action="/teste" method="post">
                        @csrf

                        <div class="input-box">
                            <input type="text" name='name' placeholder="Nome" />
                        </div>

                        <div class="input-box">
                            <input type="date" name="date"/>
                        </div>

                        <div class="input-box">
                            <input type="email" name='email' placeholder="E-mail" />
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