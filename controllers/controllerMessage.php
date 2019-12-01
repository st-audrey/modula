<?php

require_once 'models/modelMessage.php';
require_once 'views/view.php';

class ControllerMessage {

    private $modelMessage;

	public function __construct() {
        $this->modelMessage = new ModelMessage();
	}

    public function list() {
        $message = $this->modelMessage->getMessage();
        $vue = new Vue("Admin");
        $vue->generer(array('messages' => $message));
    }

	public function addMessage($date, $hour, $email, $name, $firstname, $content, $ip) {
		$this->modelMessage->addMessage($date, $hour, $email, $name, $firstname, $content, $ip);		
    }

	public function deleteMessage($id) {
		$this->modelMessage->deleteMessage($id);
		
    }

	public function showFormContact() {
        $view = new Vue("Contact");
        $view->generer();
	}
}
