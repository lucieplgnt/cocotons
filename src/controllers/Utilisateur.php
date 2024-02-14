<?php

class Utilisateur extends Controller {

    public function index() {
	    $this->render('index');
	}

    public function connexion() {
        $this->render('connexion');
    }

    public function inscription() {
        $this->render('inscription');
    }

    public function connect() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /utilisateur/connexion');
            exit;
        }

        $this->loadModel('User');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_id = $this->User->exists($username, $password);
        if ($user_id) {
            session_start();
            $_SESSION['user_id'] = $user_id;
            header('Location: /');
            exit;
        }

        header('Location: /utilisateur/connexion');
        exit;
    }

    public function register() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $this->loadModel('User');
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role' => 'user',
            'pfp' => null
        ];
        $this->User->insert($data);

        header('Location: /');
        exit;
    }

    public function disconnect() {
        session_start();
        unset($_SESSION['user_id']);

        header('Location: /');
        exit;
    }

    /**
     * Méthode POST utilisée pour ajouter un utilisateur depuis le backoffice
     * @return void
     */
    public function ajouter() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $this->loadModel('User');
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role' => $_POST['role'],
            'pfp' => null
        ];
        $this->User->insert($data);

        header('Location: /backoffice/utilisateurs');
        exit;
    }

    /**
     * Méthode POST utilisée pour modifier un utilisateur depuis le backoffice
     * @return void
     */
    public function modifier() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $this->loadModel('User');
        $data = [
            'id' => $_POST['user_id'],
            'email' => $_POST['email'],
            'role' => $_POST['role'],
            'pfp' => null
        ];
        $this->User->update($data);

        header('Location: /backoffice/utilisateurs');
        exit;
    }

    /**
     * Methode POST de suppression d'un utilisateur
     */
    public function supprimer() {
        //Si c'est pas un post ne rien faire
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            exit;
        }

        $user_id = $_POST['user_id'];

        $this->loadModel('Recipe');

        $this->Recipe->delete($user_id);

        header('Location: /backoffice/utilisateurs');
        exit;
    }
}