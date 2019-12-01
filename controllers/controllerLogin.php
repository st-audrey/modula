<?php

require_once 'models/modelAdmin.php';
require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerLogin extends Controller {

	private $modelAdmin;

	public function __construct() {
        $this->modelAdmin = new ModelAdmin();
	}

	public function verify($dataPost) {
		$login = $this->getParameter($dataPost, 'login');
		$password = $this->getParameter($dataPost, 'password');	
        $admin = $this->modelAdmin->getAdmin($login);
		
		if ($admin->rowCount() > 0) {
			$result = $admin->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $result['password'])) {
				$_SESSION['admin'] = True;
				return True;
			}
			else {
				throw new Exception('Identifiant et/ou mot de passe non valide.');
			}
		}
		else {
			throw new Exception('Cet identifiant n\'existe pas.');
		}
		return False;
	}

	public function showConnexion(){
        $view = new Vue("Login");
        $view->generer();
	}
}