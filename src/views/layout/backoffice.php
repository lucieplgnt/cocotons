<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);

//Si pas connecté alors redirection à la page d'accueil
if (!$userLoggedIn) {
    header('Location: /cocotons');
    exit;
}

?>
<h1>Cocotons Administration</h1>
<section>
    <nav>
        <ul>
            <li><a href="/cocotons/backoffice/recettes">Recettes</a></li>
            <li><a href="/cocotons">Mon compte</a></li>
        </ul>
    </nav>
    <main>
        <?= $content ?>
    </main>
</section>




