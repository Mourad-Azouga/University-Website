<!-- resources/views/support.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/support.css') }}">
    <title>Support</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form>
                <h1>Support</h1>
                <input type="email" placeholder="E-mail" required>
                <input type="CNE" placeholder="CNE (Massar)" required>
                <textarea placeholder="Expliquer votre demande" rows="5" required></textarea>


                <button type="submit">Soumettre</button>
                <button formnovalidate><a href="{{ url('/login') }}">Retour</a></button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Bonjour!</h1>
                    <p>Veuillez remplir le formulaire ci-dessous en fournissant votre adresse e-mail, CNE et le message de support.Nous nous reviendrons vers vous dans les plus brefs délais. </p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
