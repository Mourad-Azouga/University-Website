<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form method="post" action="{{ url('/login') }}">
                @csrf
                <h1>S'authentifier</h1>
                <input type="username" placeholder="Nom.Prenom" required>
                <input type="password" placeholder="Mot de passe" required>
                @if(session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                @endif

                <a href="{{ url('/support') }}">Besoin de support?</a>
                <button type="submit">Se connecter</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Bonjour !</h1>
                    <p>Veuillez entrer vos informations d'identification pour accéder à votre compte.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>