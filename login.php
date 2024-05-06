<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>TheDripDistrict</title>
</head>

<body>

    <header>
        <a href="index.php"><img id=logo src="images/Logo.png" alt="Site's logo"></a>
    </header>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Criar conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    
                </div>
                <span>ou use o seu email para registar</span>
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Palavra-passe">
                <button>Registar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Entar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    
                </div>
                <span>ou use o seu email e palavra-passe</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Palavra-passe">
                <a href="#">Esqueceu-se da palavra-passe?</a>
                <button>Entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Olá de novo!</h1>
                    <p>Introduza os seus dados para comprar no site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Amigo!</h1>
                    <p>Registe-se para comprar no site!</p>
                    <button class="hidden" id="register">Registe-se</button>
                </div>
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>