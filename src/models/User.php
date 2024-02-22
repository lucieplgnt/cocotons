<?php
class User extends Model {
	public function __construct() {
	    // Nous définissons la table par défaut de ce modèle
	    $this->table = "user";

	    // Nous ouvrons la connexion à la base de données
	    $this->getConnection();
	}

    public function insert(array $data) {
        $username = $data['username'] ?? null;
        $email = $data['email'] ?? null;
        $role = $data['role'] ?? null;
        $pfp = $data['pfp'] ?? null;
        $hash = $data['password'] ? password_hash($data['password'], c) : null;

        $sql = "INSERT INTO ".$this->table." VALUES (0, :username, :email, :password, :role, :pfp)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $hash);
        $query->bindParam(':role', $role);
        $query->bindParam(':pfp', $pfp);
        $query->execute();
    }

    public function update(array $data) {
        $id = $data['id'] ?? null;
        $email = $data['email'] ?? null;
        $role = $data['role'] ?? null;
        $pfp = $data['pfp'] ?? null;

        $sql = "UPDATE ".$this->table." SET email=:email, role=:role, profile_picture=:pfp WHERE id=:id";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':email', $email);
        $query->bindParam(':role', $role);
        $query->bindParam(':pfp', $pfp);
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function exists(string $username, string $password) {
        $sql = "SELECT id, password FROM ".$this->table." WHERE username=:username";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':username', $username);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result && password_verify($password, $result['password'])) {
            return $result['id'];
        }

        return false;
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