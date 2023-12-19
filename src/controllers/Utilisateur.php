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
            header('Location: /cocotons/utilisateur/connexion');
            exit;
        }

        $this->loadModel('User');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_id = $this->User->exists($username, $password);
        if ($user_id) {
            session_start();
            $_SESSION['user_id'] = $user_id;
            header('Location: /cocotons');
            exit;
        }

        header('Location: /cocotons/utilisateur/connexion');
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

        header('Location: /cocotons');
        exit;
    }

    public function disconnect() {
        session_start();
        unset($_SESSION['user_id']);

        header('Location: /cocotons');
        exit;
    }
}