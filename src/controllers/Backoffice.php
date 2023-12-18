<?php

class Backoffice extends Controller {

    public function index() {
	    $this->render('index', [], true);
	}

    public function recettes() {
        $this->render('recettes', [], true);
    }
}