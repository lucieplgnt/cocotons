<?php
session_start();

$userLoggedIn = isset($_SESSION['user_id']);

//Si pas connecté alors redirection à la page d'accueil
if (!$userLoggedIn) {
    header('Location: /cocotons');
    exit;
}

echo $content;


