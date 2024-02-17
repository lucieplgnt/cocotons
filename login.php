<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Cocotons</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div class="signin-container">
        <div class="decorative-image"></div>
        <div class="signin-form">
           <div class="title">
           <h1 class="h1">Cher Cocotiers, <br>
                Bienvenue sur cocotons !
            </h1>
            <p>un endroit de bonne cuisine et de partage !</p>
           </div>
            <form>
                <div class="form-group">
                    <label for="username">Identifiant</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="signin-button">Connexion</button>
                    <button type="submit" class="signin-button">Inscription</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>