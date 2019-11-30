<?php

require_once 'models/modelMessage.php';
require_once 'views/view.php';

class ControllerMessage {

    private $modelMessage;

	public function __construct() {
        $this->modelMessage = new ModelMessage();
	}

    public function list() {
        $messages = $this->modelMessage->getMessage();
        $vue = new Vue("Admin");
        $vue->generer(array('messages' => $messages));
    }

	public function addMessage($date, $hour, $email, $name, $firstname, $content, $ip) {
		$this->modelMessage->addMessage($date, $hour, $email, $name, $firstname, $content, $ip);
		$vue = new Vue("MessageSent");
        $vue->generer();
		
    }

	public function deleteMessage($id) {
		$this->modelMessage->deleteMessage($id);
		
    }

	public function showFormContact() {
        $view = new Vue("Contact");
        $view->generer();
	}
}
