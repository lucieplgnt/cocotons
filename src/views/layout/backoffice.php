<?php

if (!isset($_SESSION)) {
    session_start();
}

$userLoggedIn = isset($_SESSION['user_id']);

//Si pas connecté alors redirection à la page de connexion
if (!$userLoggedIn) {
    header('Location: /utilisateur/connexion');
    exit;
}

?>
<head>
    <link rel="stylesheet" href="http://localhost/assets/css/backoffice.css">
</head>
<h1 class="main-title">Cocotons Administration</h1>
<section class="page">
    <nav>
        <ul>
            <li><a href="/backoffice/utilisateurs">Utilisateurs</a></li>
            <li><a href="/backoffice/categories">Catégories</a></li>
            <li><a href="/backoffice/recettes">Recettes</a></li>
            <li><a href="/backoffice/profil">Mon compte</a></li>
        </ul>
    </nav>
    <main>
        <?=$content ?>
    </main>
</section>




