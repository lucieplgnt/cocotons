<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'include/head.php' ?>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/mes-commentaires.css">
    <link rel="stylesheet" href="/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/font-awesome/css/fontawesome.min.css">
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
                <a href="mes-recettes.php">Mes recettes</a>
                <a href="#" class="selected">Mes commentaires</a>
            </div>
            <div class="deconnexion">
                <div class="separator-2"></div>
                <a class="deconnexion">Déconnexion</a>
            </div>
        </nav>

        <main>
            <h1 class="nv-comment">Nouveaux Commentaires</h1>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Commentaire</th>
                        <th>Note</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Utilisateur 1</td>
                        <td>Très bonne recette</td>
                        <td>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa-solid fa-star star-1"></i>
                                    <i class="fa-solid fa-star star-2"></i>
                                    <i class="fa-solid fa-star star-3"></i>
                                    <i class="fa-solid fa-star star-4"></i>
                                    <i class="fa-solid fa-star star-5"></i>
                                </div>

                            </div>
                        </td>
                        <td>
                            <i class="fa-solid fa-check" style="font-size:48px;color: green;margin: 2rem 1rem;"></i>
                            <i class="fa fa-trash-alt" style="font-size:48px;color: var(--secondary);margin: 2rem 1rem;"></i>
                        </td>
                    </tr>
                    <tr class="active-row">
                        <td>Utilisateur 2</td>
                        <td>Bonne recette mais un peu fade</td>
                        <td>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa-solid fa-star star-1"></i>
                                    <i class="fa-solid fa-star star-2"></i>
                                    <i class="fa-solid fa-star star-3"></i>
                                    <i class="fa-solid fa-star star-4"></i>
                                    <i class="fa-solid fa-star star-5"></i>
                                </div>

                            </div>
                        </td>
                        <td>
                            <i class="fa-solid fa-check" style="font-size:48px;color: green;margin: 2rem 1rem;"></i>
                            <i class="fa fa-trash-alt" style="font-size:48px;color: var(--secondary);margin: 2rem 1rem;"></i>
                        </td>
                    </tr>
                    <!-- Newly added rows -->
                    <tr>
                        <td>Utilisateur 3</td>
                        <td>Manquait de sel à mon goût</td>
                        <td>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa-solid fa-star star-1"></i>
                                    <i class="fa-solid fa-star star-2"></i>
                                    <i class="fa-solid fa-star star-3"></i>
                                    <i class="fa-solid fa-star star-4"></i>
                                    <i class="fa-solid fa-star star-5"></i>
                                </div>

                            </div>
                        </td>
                        <td>
                            <i class="fa-solid fa-check" style="font-size:48px;color: green;margin: 2rem 1rem;"></i>
                            <i class="fa fa-trash-alt" style="font-size:48px;color: var(--secondary);margin: 2rem 1rem;"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Utilisateur 4</td>
                        <td>Parfait pour un dîner rapide</td>
                        <td>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa-solid fa-star star-1"></i>
                                    <i class="fa-solid fa-star star-2"></i>
                                    <i class="fa-solid fa-star star-3"></i>
                                    <i class="fa-solid fa-star star-4"></i>
                                    <i class="fa-solid fa-star star-5"></i>
                                </div>

                            </div>
                        </td>
                        <td>
                            <i class="fa-solid fa-check" style="font-size:48px;color: green;margin: 2rem 1rem;"></i>
                            <i class="fa fa-trash-alt" style="font-size:48px;color: var(--secondary);margin: 2rem 1rem;"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Utilisateur 5</td>
                        <td>Les enfants ont adoré</td>
                        <td>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa-solid fa-star star-1"></i>
                                    <i class="fa-solid fa-star star-2"></i>
                                    <i class="fa-solid fa-star star-3"></i>
                                    <i class="fa-solid fa-star star-4"></i>
                                    <i class="fa-solid fa-star star-5"></i>
                                </div>

                            </div>
                        </td>
                        <td>
                            <i class="fa-solid fa-check" style="font-size:48px;color: green;margin: 2rem 1rem;"></i>
                            <i class="fa fa-trash-alt" style="font-size:48px;color: var(--secondary);margin: 2rem 1rem;"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Utilisateur 6</td>
                        <td>Un peu trop épicé pour moi</td>
                        <td>
                            <div class="rating">
                                <div class="stars">
                                    <i class="fa-solid fa-star star-1"></i>
                                    <i class="fa-solid fa-star star-2"></i>
                                    <i class="fa-solid fa-star star-3"></i>
                                    <i class="fa-solid fa-star star-4"></i>
                                    <i class="fa-solid fa-star star-5"></i>
                                </div>

                            </div>
                        </td>
                        <td>
                            <i class="fa-solid fa-check" style="font-size:48px;color: green;margin: 2rem 1rem;"></i>
                            <i class="fa fa-trash-alt" style="font-size:48px;color: var(--secondary);margin: 2rem 1rem;"></i>
                        </td>
                    </tr>
                    <!-- End of newly added rows -->
                </tbody>
            </table>
          <div class="buttons">
          <a class="button">
                Annuler
            </a>
            <a class="button pub">
                Publier 
            </a>
          </div>
        </main>

    </div>
    <script src="/public/js/app.js"></script>
</body>

</html>