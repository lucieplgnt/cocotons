<?php
class Category extends Model {

	public function __construct() {
	    // Nous définissons la table par défaut de ce modèle
	    $this->table = "category";

	    // Nous ouvrons la connexion à la base de données
	    $this->getConnection();
	}

    public function insert($name) {
        $sql = "INSERT INTO ".$this->table." VALUES (0, :name)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':name', $name);
        $query->execute();
    }
}