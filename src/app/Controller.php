<?php

abstract class Controller {
	/**
	 * Permet de charger un modèle
	 *
	 * @param string $model
	 * @return void
	 */
	public function loadModel(string $model){
	    // On va chercher le fichier correspondant au modèle souhaité
	    require_once(ROOT.'models/'.$model.'.php');
	    
	    // On crée une instance de ce modèle. Ainsi "Article" sera accessible par $this->Article
	    $this->$model = new $model();
	}

	/**
	 * Afficher une vue
	 *
	 * @param string $fichier
	 * @param array $data
	 * @return void
	 */
	public function render(string $fichier, array $data = [], bool $isBackoffice = false){
        extract($data);

        // On démarre le buffer de sortie ("ob_start" crée ce "buffer" et stocke tout le code de sortie généré)
        ob_start();

        // On génère la vue
        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');

        // On stocke le contenu dans $content ("ob_get_clean" va vider ce buffer dans la variable de notre choix)
        $content = ob_get_clean();

        // On fabrique le "template"
        if ($isBackoffice) {
            require_once(ROOT.'views/layout/backoffice.php');
        } else {
            require_once(ROOT . 'views/layout/default.php');
        }
    }
    
	// public function render(string $fichier, array $data = []){
	//     // Récupère les données et les extrait sous forme de variables
	//     // Exemple
	// 	// $data = [
	// 	// 	'id' => 1,
	// 	// 	'contenu' => 'Ceci est le contenu'
	// 	// ];
	// 	// devient 
	// 	// $id = 1;
	// 	// $contenu = 'Ceci est le contenu';
	//     extract($data);	

	//     // Crée le chemin et inclut le fichier de vue
	//     require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');
	// }

}

