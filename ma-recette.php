<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'include/head.php' ?>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/ma-recette.css">
    <link rel="stylesheet" href="/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/font-awesome/css/fontawesome.min.css">
    <title>Cocotons</title>
</head>

<body>
    <header>
        <img src="/assets/img/logo-cocotons.png">
        <img class="logo-admin" src="/assets/img/admin-cocotons.png">
        <a href="index.php"> Retourner sur le site </a>
    </header>

    <div class="container">
        <nav class="side-bar">
            <div class="side-bar-elements">
                <a href="mes-recettes.php" class="mes-recettes-style">Mes recettes</a>
                <a href="mes-commentaires">Mes commentaires</a>
            </div>
            <div class="deconnexion">
                <div class="separator-2"></div>
                <a class="deconnexion">Déconnexion</a>
            </div>
        </nav>

        <main>
            <img src="/assets/img/recette-2.png" alt="" class="img-recette">
            <div class="recette-title">
                <p>Merlu grillé</p>
                <i class="fa-solid fa-pen edit-icon"></i>
            </div>
            <div class="rating">
                <div class="stars">
                    <i class="fa-solid fa-star star-1"></i>
                    <i class="fa-solid fa-star star-2"></i>
                    <i class="fa-solid fa-star star-3"></i>
                    <i class="fa-solid fa-star star-4"></i>
                    <i class="fa-solid fa-star star-5"></i>
                </div>

            </div>
            <p class="recette-description">Quoi de plus savoureux que du poisson au barbecue ? le merlu se prete particulierement bien a la cuisson au BBQ. Sublimez encore la saveur de votre poisson avec une marinade rehaussée de piment, citron et fines herbes <i class="fa-solid fa-pen edit-icon"></i></p>
            <div class="recette-inf">
                <div class="icon-container">
                <i class="fa-solid fa-people-group inf-icon"></i>
                <p class="information">4</p>
                </div>
                <div class="icon-container">
                <i class="fa-regular fa-clock inf-icon"></i>
                <p class="information">30 min</p>
                </div>
                <div class="icon-container">
                <i class="fa-solid fa-kitchen-set inf-icon"></i>
                <p class="information">moyen</p>
                </div>
            </div>
            <div class="separator"></div>

            <h2 class="recette-ingredient">Ingrédients</h2>
            <ul class="list-ingredient">
                <li>4 merlus</li>
                <li>2 citrons</li>
                <li>1 botte de coriandre</li>
                <li>1 botte de menthe</li>
            </ul>
        </main>

    </div>
    <script src="/public/js/app.js"></script>
</body>

</html>