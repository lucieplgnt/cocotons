<?php

class Articles extends Controller {
	/**
	 * Cette méthode affiche la liste des articles
	 *
	 * @return void
	 */
	public function index() {
	    // On instancie le modèle "Article"
	    $this->loadModel('Article');

	    // On stocke la liste des articles dans $articles
	    $articles = $this->Article->getAll();

	    // On envoie les données à la vue index
	    // Les données devront être passées sous forme de tableau. 
	    $this->render('index', ['articles' => $articles]);
	    // Nous pourrons utiliser la fonction php "compact" pour créer le tableau pour nous.
	    // ou $this->render('index', compact('articles'));
	}

	/**
	 * Méthode permettant d'afficher un article à partir de son slug
	 *
	 * @param string $slug
	 * @return void
	 */
	public function lire(string $slug){
	    // On instancie le modèle "Article"
	    $this->loadModel('Article');

	    // On stocke l'article dans $article
	    $article = $this->Article->findBySlug($slug);

	    // On envoie les données à la vue lire
	    $this->render('lire', compact('article', ));
	}

}