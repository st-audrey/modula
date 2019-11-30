<?php

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
				// Contrôle Login admin
				if ($_GET['type'] == 'login') {
					if (isset($_GET['action']) && $_GET['action'] == "connexion") {
						$login = $this->getParametre($_POST, 'login');
						$password = $this->getParametre($_POST, 'password');							
						if($this->ctrlLogin->verify($login, $password)) {
							$this->ctrlMessage->list();
						}
					}
					else {
						$this->ctrlLogin->showConnexion();
					}
				}
				else if ($_GET['type'] == 'contact') {
					if (isset($_GET['action']) && $_GET['action'] == "message") {
						$date = getDate();
						$hour = getHour();
						$ip = getIp();
						$email = $this->getParametre($_POST, 'email');
						$name = $this->getParametre($_POST, 'name');
						$firstname = $this->getParametre($_POST, 'firstname');
						$name = $this->getParametre($_POST, 'name');

						$this->ctrlMessage->addMessage($date, $hour, $email, $name, $firstname, $content, $ip);
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
	
	private function getDate(){
		date_default_timezone_set("Europe/Paris");
		$date = date("Y-m-d");
		return $date;
	}

	private function getHour(){
		date_default_timezone_set("Europe/Paris");
		$hour = date("h:i:s");
		return $hour;
	}
	
	private function getIp(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])){ //share internet
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //ip is pass from proxy
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}


