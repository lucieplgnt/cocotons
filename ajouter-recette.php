<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'include/head.php' ?>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/ajouter-recette.css">
    <link rel="stylesheet" href="/assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/font-awesome/css/fontawesome.min.css">
    <script src="https://cdn.tiny.cloud/1/z9ukeg78ozkypxw5s433yflbxwaugzhimajwhmqia2geptfd/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Cocotons</title>
</head>

<body>
    <header>
        <img src="/assets/img/logo-cocotons.png">
        <img class="logo-admin" src="/assets/img/admin-cocotons.png">
        <a href="#"> Retourner sur le site </a>
    </header>

    <div class="container">
        <nav class="side-bar">
            <div class="side-bar-elements">
                <a href="mes-recettes.php" class="mes-recettes-style">Mes recettes</a>
                <a href="mes-commentaires.php">Mes commentaires</a>
            </div>
            <div class="deconnexion">
                <div class="separator-2"></div>
                <a class="deconnexion">Déconnexion</a>
            </div>
        </nav>

        <main>
            <div class="img-placeholder">
                <i class="fa-solid fa-camera img-mettre"></i>
            </div>
            <div class="recette-title">
                <p>Titre</p>
                <i class="fa-solid fa-pen edit-icon"></i>
            </div>
            <p class="etoile">Votre recette n'est pas evalué</p>

            <div class="categorie-container">
                <label for="categorie" class="label-text-area">Catégorie</label>
                <select id="categorie" class="information-input">
                    <option value="entree">Entrées</option>
                    <option value="plat">Plat</option>
                    <option value="dessert">Dessert</option>
                    <option value="petit-dejeune">Petits déjeunés</option>
                    <option value="gouter">Goûter</option>
                </select>
            </div>


            <div class="recette-introduction">

                <label class="label-text-area" for="paragraphe">Introduction</label>
                <div class="border-text-area">
                    <textarea id="paragraphe" name="paragraphe" rows="5" cols="80"></textarea>
                </div>
            </div>
            <div class="recette-inf">
                <div class="icon-container">
                    <i class="fa-solid fa-people-group inf-icon"></i>
                    <select class="information-input">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="icon-container">
                    <i class="fa-regular fa-clock inf-icon"></i>
                    <input type="number" class="information-input" placeholder="Temps de préparation">
                    <span class="input-label">minutes</span>
                </div>
                <div class="icon-container">
                    <i class="fa-solid fa-kitchen-set inf-icon"></i>
                    <input type="number" class="information-input" placeholder="Température du four">
                    <span class="input-label">°</span>
                </div>
            </div>
            <div class="ingredients-container">
                <p class="paragraph-theme">Ingrédients</p>
                <div class="border-input">
                    <input class="input-theme" type="text" id="ingredientInput">
                </div>
                <button class="button-theme-outline" onclick="ajouterIngredient()">Ajouter</button>
                <div class="ingredient-bubbles" id="ingredientBubbles"></div>
            </div>

            <div class="recette-etapes">
                <label class="label-text-area" for="etapes">la Recette</label>
                <div class="border-text-area">
                    <textarea id="etapes" name="etapes" rows="10" cols="800"></textarea>
                </div>
            </div>

        </main>

    </div>
    <script src="/public/js/app.js"></script>
    <script src="/public/js/ingredient.js"></script>
    <script src="/public/js/text-area.js"></script>
</body>

</html>