<?php

session_start();

require_once 'views/view.php';
require_once 'controllers/controllerLogin.php';
require_once 'controllers/controllerMessage.php';
require_once 'controllers/controllerHome.php';


class Router {
	
    private $ctrlLogin;
	private $ctrlMessage;
	private $ctrlHome;
  
    public function __construct() {
        $this->ctrlLogin = new controllerLogin();
		$this->ctrlMessage = new controllerMessage();
		$this->ctrlHome = new controllerHome();
    }

	public function routerRequete() {
		try {
			if (isset($_GET['type'])) {
				// Login admin
				if ($_GET['type'] == 'login') {
					if (isset($_GET['action'])) {
						if($_GET['action'] == "connexion") {
							if($this->ctrlLogin->verify($_POST)) {
								$this->ctrlMessage->list();
							}
						}
						else if($_GET['action'] == "detail") {
							$this->ctrlMessage->getDetailMessage($_POST);
						}
					}
					else {
						$this->ctrlLogin->showConnexion();
					}
				}
				// Contact form
				else if ($_GET['type'] == 'contact') {
					if (isset($_GET['action']) && $_GET['action'] == "message") {
						$this->ctrlMessage->addMessage($_POST);
					}
					else {
						$this->ctrlMessage->showFormContact();
					}
				}
			}
			else {
				$this->ctrlHome->showHome();
			}
		}
		catch (Exception $e) {
			$this->erreur($e->getMessage());
		}
	}

	private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}


