<?php
class Recipe extends Model {

	public function __construct() {
	    // Nous définissons la table par défaut de ce modèle
	    $this->table = "recipe";

	    // Nous ouvrons la connexion à la base de données
	    $this->getConnection();
	}

    public function insert(array $data) {
        $title = $data['title'] ?? null;
        $description = $data['description'] ?? null;
        $content = $data['content'] ?? null;
        $author = $data['author'] ?? null;
        $category = $data['category'] ?? null;
        $date = $data['date'] ?? null;
        $image = $data['image'] ?? null;

        $sql = "INSERT INTO recipe VALUES (0, :title, :description, :content, :date, :image, :author, :category)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':title', $title);
        $query->bindParam(':description', $description);
        $query->bindParam(':content', $content);
        $query->bindParam(':date', $date);
        $query->bindParam(':image', $image);
        $query->bindParam(':author', $author);
        $query->bindParam(':category', $category);
        
        $query->execute();
    }

    public function update(array $data) {
        $id = $data['id'] ?? null;
        $title = $data['title'] ?? null;
        $description = $data['description'] ?? null;
        $content = $data['content'] ?? null;
        $category = $data['category'] ?? null;
        $date = $data['date'] ?? null;
        $image = $data['image'] ?? null;

        $sql = "UPDATE ".$this->table." SET title=:title, description=:description, 
        content=:content, category=:category, date=:date, image=:image WHERE id=:id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':title', $title);
        $query->bindParam(':description', $description);
        $query->bindParam(':content', $content);
        $query->bindParam(':category', $category);
        $query->bindParam(':date', $date);
        $query->bindParam(':image', $image);
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function getForUser($user_id) {
        $sql = "SELECT * FROM ".$this->table." WHERE author=:author";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':author', $user_id);
        $query->execute();
        return $query->fetchAll();
    }

    public function get($id){
        $sql = "SELECT * FROM ".$this->table." WHERE id=:id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function delete($id) {
        $sql = "DELETE FROM ".$this->table." WHERE id=:id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }
}