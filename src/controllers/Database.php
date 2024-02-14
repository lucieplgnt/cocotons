<?php

class Database extends Controller {

    public function createDefaultAdmin() {
        $data = [
            'username' => 'admin',
            'email' => 'admin@admin.fr',
            'role' => 'admin',
            'pfp' => null,
            'password' => 'admin'
        ];
	    
        $this->loadModel("User");

        $this->User->insert($data);

        echo "Default admin created";
	}
}