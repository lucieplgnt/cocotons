<?php

class Backoffice extends Controller {

    public function index() {
	    $this->render('index', [], true);
	}

    public function recettes() {
        $this->loadModel('Recipe');

        session_start();
        $recipes = $this->Recipe->getForUser($_SESSION['user_id']);

        $data = [
            'recipes' => $recipes
        ];

        $this->render('recettes', $data, true);
    }

    public function ajouterrecette() {
        $this->loadModel('Category');
        $categories = $this->Category->getAll();

        $data = [
            'categories' => $categories
        ];

        $this->render('ajouterrecette', $data, true);
    }

    public function addrecipe() {
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
}