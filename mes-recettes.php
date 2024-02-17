<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'include/head.php' ?>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/mes-recettes.css">
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
                <a href="mes-recettes.php" class="selected">Mes recettes</a>
                <a href="mes-commentaires.php">Mes commentaires</a>
                <a href="admin.php">Mon compte</a>
            </div>
            <div class="deconnexion">
                <div class="separator-2"></div>
                <a class="deconnexion">Déconnexion</a>
            </div>
        </nav>

        <main>
            <?php require_once 'include/searchbar.php' ?>
            <div class="filtre">
                <img class="filtre-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA8klEQVRIS+2U2w3CMAxF2w1gAzYAJgA2YRQ2gU2ADWADmAA2gHsjp6IlsfNQxQ+VrKpqco7tPNpm5Kcdmd/8RHBBVfPKyshYkhGq4FUJ99MdWxOUts8naAqmSOCZWc0E4x8yJyo4YcAKwT5uMiSEHxELxBmxjrWIAynhQqdKPuFXgbvqY33OkUThmoD/UiQq3BJYEhOeIghJ3AGS9eE69Xou/7pX6l7/2n4g+P2ubudUATPqHaDA9zB59/0XmF0obdEW5L00XWWUCG4AzwTOLcq7J/qUCAi7I3aIgwY3+zeYzIuP5yEJ7OfmVGAlW30OigRvlo0/GbjZ2zQAAAAASUVORK5CYII=" />
                <p class="filtre-element">Plats</p>
                <p class="filtre-element">Entrées</p>
            </div>
            <div class="separator"></div>
            <div class="tri">
                <p> trier par <a href="#"> plus recent </a> </p>
            </div>
            <div class="recettes-container">
                <?php require 'include/recettes-content-mesrecettes.php' ?>

                <?php require 'include/recettes-content-mesrecettes.php' ?>

                <?php require 'include/recettes-content-mesrecettes.php' ?>

                <?php require 'include/recettes-content-mesrecettes.php' ?>

            </div>

            <a href="ajouter-recette.php" class="btn-add">
                <i class="fa-solid fa-circle-plus add-recette"></i>
            </a>
        </main>

    </div>
    <script src="/public/js/app.js"></script>
</body>

</html>