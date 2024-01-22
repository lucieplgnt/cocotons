<?php

class Backoffice extends Controller {

    public function index() {
	    $this->render('index', [], true);
	}

    /**
     * Affichage de la liste des recettes pour l'utilisateur connecté
     * @return void
     */
    public function recettes() {
        $this->loadModel('Recipe');

        session_start();
        $recipes = $this->Recipe->getForUser($_SESSION['user_id']);

        $data = [
            'recipes' => $recipes
        ];

        $this->render('recettes', $data, true);
    }

    /**
     * Affichage de form de création/modification/suppression d'une recette
     * @param $recipe_id
     * @return void
     */
    public function modifierrecette($recipe_id) {
        $this->loadModel('Category');
        $categories = $this->Category->getAll();

        $this->loadModel('Recipe');
        $recipe = null;

        if ($recipe_id != 0 && $recipe_id != "0") {
            $recipe = $this->Recipe->get($recipe_id);
        }

        $data = [
            'categories' => $categories,
            'recipe' => $recipe
        ];

        $this->render('modifierrecette', $data, true);
    }

    /**
     * Affichage de la liste des catégories
     * @return void
     */
    public function categories() {
        $this->loadModel('Category');
        $categories = $this->Category->getAll();

        $data = [
            'categories' => $categories
        ];

        $this->render('categories', $data, true);
    }

    /**
     * Affichage de la liste des utilisateurs
     * @return void
     */
    public function utilisateurs() {
        $this->loadModel('User');
        $users = $this->User->getAll();

        $data = [
            'users' => $users
        ];

        $this->render('utilisateurs', $data, true);
    }

    /**
     * Affichage de form de création/modification/suppression d'un utilisateur
     * @param $user_id
     * @return void
     */
    public function modifierutilisateur($user_id) {
        $this->loadModel('User');
        $user = null;

        if ($user_id != 0 && $user_id != "0") {
            $user = $this->User->get($user_id);
        }

        $data = [
            'user' => $user
        ];

        $this->render('modifierutilisateur', $data, true);
    }

    /**
     * Affichage de la page de l'utilisateur connecté
     * @return void
     */
    public function profil() {
        session_start();

        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            $this->loadModel('User');
            $user = $this->User->get($user_id);

            $data = [
                'user' => $user
            ];

            $this->render('profil', $data, true);
        }
    }
}