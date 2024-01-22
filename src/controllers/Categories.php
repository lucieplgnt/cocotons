<?php

class Categories extends Controller {

    /**
     * Methode POST d'ajout d'une catégorie
     */
    public function ajouter() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /cocotons/backoffice/categories');
            exit;
        }

        $this->loadModel('Category');

        $this->Category->insert($_POST['name']);

        header('Location: /cocotons/backoffice/categories');
        exit;
    }
}