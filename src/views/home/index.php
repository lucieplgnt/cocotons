<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'include/head.php' ?>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    <title>Cocotons</title>
</head>

<body>
    <header>
        <img src="/assets/img/logo-cocotons.png">
        <a href="/utilisateur/connexion"> Connexion/Deconnexion </a>
    </header>

    <div class="container">
        <?php require_once '../../include/sidebar.php' ?>

        <main>
            <?php require_once '../../include/searchbar.php' ?>
            <p class="title">Nos recettes du moments</p>
            <div class="separator"></div>
            <div class="tri">
                <p> trier par <a href="#"> plus recent </a> </p>
            </div>
            <div class="recettes-container">
                <?php require '../../include/recette-content.php' ?>

                <?php require '../../include/recette-content.php' ?>

                <?php require '../../include/recette-content.php' ?>

                <?php require '../../include/recette-content.php' ?>

            </div>
        </main>

    </div>
    <script src="/assets/js/app.js"></script>
</body>

</html>