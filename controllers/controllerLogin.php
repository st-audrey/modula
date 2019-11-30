<?php

require_once 'models/modelAdmin.php';
require_once 'views/view.php';

class ControllerLogin {

	private $modelAdmin;

	public function __construct() {
        $this->modelAdmin = new ModelAdmin();
	}

	public function verify($login, $password) {
        $admin = $this->modelAdmin->getAdmin($login);
		
		if ($admin->rowCount() > 0) {
			$result = $admin->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $result['password'])) {
				$view = new Vue("Admin");
				$view->generer();
			}
			else {
				$view = new Vue("Erreur");
				$view->generer(array('msgErreur' => 'Identifiant et/ou mot de passe non valide.'));
			}
		}
	}

	public function showConnexion(){
        $view = new Vue("Login");
        $view->generer();
	}
}