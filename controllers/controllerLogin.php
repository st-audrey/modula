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
				return True;
			}
			else {
				$view = new Vue("Erreur");
				$view->generer(array('msgErreur' => 'Identifiant et/ou mot de passe non valide.'));
			}
		}
		else {
			$view = new Vue("Erreur");
			$view->generer(array('msgErreur' => 'Cet identifiant n\'existe pas.'));
		}
		return False;
	}

	public function showConnexion(){
        $view = new Vue("Login");
        $view->generer();
	}
}