<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <script src="{{ asset('js/script.js') }}"></script>
    <img src="{{ asset('images/LogoEmpresa.png') }}" alt="Logo da Farmácia" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <title>Página de Login</title>
</head>
<body>
    <div class="conteiner" id="conteiner">
        <div class="form-conteiner sign-in">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <h1>Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Ou use seu e-mail e senha</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Senha" required />
                <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                <button type="submit">Logar</button>
            </form>
        </div>
        <div class="toggle-conteiner">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>
                        <img src="{{ asset('images/LogoEmpresa.png') }}" />
                        <div>Farmácia Municipal</div>
                        Olá Amigo
                    </h1>
                    <p>Faça login com seus dados pessoais para usar todos os recursos do site</p>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>
                        <img src="{{ asset('images/LogoEmpresa.png') }}" />
                        <div>Farmácia Municipal</div>
                        Bem-Vindo de Volta
                    </h1>
                    <p>Insira seus dados pessoais para acessar o sistema</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
