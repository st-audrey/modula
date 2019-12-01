<?php

require_once 'models/modelMessage.php';
require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerMessage extends Controller {

    private $modelMessage;

	public function __construct() {
        $this->modelMessage = new ModelMessage();
	}

    public function list() {
        $message = $this->modelMessage->getMessage();
        $vue = new Vue("Admin");
        $vue->generer(array('messages' => $message));
    }

	public function addMessage($dataPost) {
		$captcha;
		if(isset($dataPost['g-recaptcha-response'])){
			$captcha=$dataPost['g-recaptcha-response'];
		}

		// should return JSON with success as true
		if($this->checkCaptcha($captcha)) {
				$ip = $this->getIp();
				$date = $this->getDate();
				$hour = $this->getHour();

				$email =		htmlspecialchars($this->getParameter($dataPost, 'email'));
				$name =			htmlspecialchars($this->getParameter($dataPost, 'name'));
				$firstname =	htmlspecialchars($this->getParameter($dataPost, 'firstname'));
				$content =		htmlspecialchars($this->getParameter($dataPost, 'content'));


				$this->modelMessage->addMessage($date, $hour, $email, $name, $firstname, $content, $ip);								
	  			echo json_encode(array("success" => True));

		} else {
				echo json_encode(array("success" => False));
		}	
    }

	public function getDetailMessage($dataPost) {

		if (isset($_SESSION['token']) && isset($dataPost['token']) && !empty($_SESSION['token']) && !empty($dataPost['token'])) {
			//Check CSRF and if the user is logged as an admin
			if ($_SESSION['token'] == $_POST['token'] && isset($_SESSION['admin'])) {
				$message = $this->modelMessage->getDetailMessage($dataPost['id']);
				if ($message->rowCount() > 0) {
					$data = $message->fetch(PDO::FETCH_ASSOC);
					echo json_encode($data);
				}
				else {
					throw new Exception('L\'identifiant de ce message est introuvable.');	
				}
			}
		}
    }

	public function showFormContact() {
        $view = new Vue("Contact");
        $view->generer();
	}


	private function checkCaptcha($captcha){
		if(!isset($captcha)){
			return False;
		}
		$secretKey = "6LfiZMUUAAAAADvODfe8D7H1XiVydM2XSZ0hYdVa";
		$ip = $this->getIp();
		// post request to server
		$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
		$response = file_get_contents($url);
		$responseKeys = json_decode($response,true);
		
		if($responseKeys["success"]) {
			return True;	
		}
		else {
			return False;
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
	
}
