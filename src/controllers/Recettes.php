<?php

class Recettes extends Controller {

    /**
     * Methode POST d'ajout d'une recette
     */
    public function ajouter() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /cocotons/backoffice/recettes');
            exit;
        }

        session_start();

        $this->loadModel('Recipe');

        //Si on arrive ici c'est que le user_id de la session n'est pas null
        $data = [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'content' => $_POST['content'],
            'category' => $_POST['category'],
            'author' => $_SESSION['user_id'],
            'date' => (new DateTime())->format('Y-m-d'),
            'image' => null
        ];
        $this->Recipe->insert($data);

        header('Location: /cocotons/backoffice/recettes');
        exit;
    }

    /**
     * Methode POST de modification d'une recette
     */
    public function modifier() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /cocotons/backoffice/recettes');
            exit;
        }

        $this->loadModel('Recipe');

        //Si on arrive ici c'est que le user_id de la session n'est pas null
        $data = [
            'id' => $_POST['recipe_id'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'content' => $_POST['content'],
            'category' => $_POST['category'],
            'date' => (new DateTime())->format('Y-m-d'),
            'image' => null
        ];
        $this->Recipe->update($data);

        header('Location: /cocotons/backoffice/recettes');
        exit;
    }

    /**
     * Methode POST de suppression d'une recette
     */
    public function supprimer() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /cocotons/backoffice/recettes');
            exit;
        }

        $recipe_id = $_POST['recipe_id'];

        $this->loadModel('Recipe');

        $this->Recipe->delete($recipe_id);

        header('Location: /cocotons/backoffice/recettes');
        exit;
    }
}