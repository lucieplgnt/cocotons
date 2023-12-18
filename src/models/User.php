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
        $hash = $data['password'] ? password_hash($data['password'], PASSWORD_DEFAULT) : null;

        $sql = "INSERT INTO utilisateur VALUES (0, :username, :email, :password, :role, :pfp)";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $hash);
        $query->bindParam(':role', $role);
        $query->bindParam(':pfp', $pfp);
        $query->execute();
    }

    public function exists(string $username, string $password) {
        $sql = "SELECT id, password FROM ".$this->table." WHERE username=:username";
        $query = $this->_connexion->prepare($sql);
        $query->bindParam(':username', $username);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $result['password'])) {
            return $result['id'];
        }

        return false;
    }
}