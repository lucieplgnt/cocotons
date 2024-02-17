<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cocotons</title>
</head>

<body>
    <header>
        <img src="/assets/img/logo-cocotons.png">
        <img class="logo-admin" src="/assets/img/admin-cocotons.png">
        <a href="index.php"> Retour sur le site </a>
    </header>

    <div class="container">
        <nav class="side-bar">
            <div class="side-bar-elements">
                <a href="mes-recettes.php">Mes recettes</a>
                <a href="mes-commentaires.php">Mes commentaires</a>
            </div>
            <div class="deconnexion">
                <div class="separator-2"></div>
                <a class="deconnexion">Déconnexion</a>
            </div>
        </nav>

        <main>
            <div class="profil">
                <div class="img-profil">
                    <img src="/assets/img/profil-cocotons.jpg" class="img-profil">
                    <object type="image/svg+xml" data="/assets/img/edit.svg" class="edit-svg"> </object>
                </div>
                <div class="nom-profil">
                    <div class="label-profil">jaber benz</div>
                    <object type="image/svg+xml" data="/assets/img/edit.svg" class="edit-svg" id="modify-name"> </object>
                </div>
            </div>
            <div class="separator"></div>
            <div class="moyenne-container">
                <div class="moyenne">Moyenne d'etoiles:</div>
                <div class="rating">
                    <div class="stars">
                        <i class="fa-solid fa-star star-1"></i>
                        <i class="fa-solid fa-star star-2"></i>
                        <i class="fa-solid fa-star star-3"></i>
                        <i class="fa-solid fa-star star-4"></i>
                        <i class="fa-solid fa-star star-5"></i>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="info-profil">
                <div class="email">
                    <label for="email"> Adresse email : </label>
                    <input type="email" value="coco@gmail.com">
                    <object type="image/svg+xml" data="/assets/img/edit.svg" class="edit-svg"> </object>
                </div>
                <div class="password">
                    <label for="password"> Mot de passe : </label>
                    <input type="password" value="ureoiezuroezuroez">
                    <object type="image/svg+xml" data="/assets/img/edit.svg" class="edit-svg"> </object>
                </div>
            </div>

            <a class="supprimer">
                Supprimer le compte
            </a>

        </main>

    </div>
    <script src="/public/js/app.js"></script>
</body>

</html>