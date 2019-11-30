<?php

require_once 'models/modelMessage.php';
require_once 'views/view.php';

class ControllerMessage {

    private $modelMessage;

    public function list() {
        $messages = $this->modeleMessage->getMessage();
        $vue = new Vue("Admin");
        $vue->generer(array('messages' => $messages));
    }

	public function addMessage($date, $hour, $email, $name, $firstname, $content, $ip) {
		$this->modelMessage->addMessage($date, $hour, $email, $name, $firstname, $content, $ip);
		$this->list();
    }

	public function deleteMessage($id) {
		$this->modelMessage->deleteMessage($id);
		$this->list();
    }

	public function showFormContact() {
        $view = new Vue("Contact");
        $view->generer();
	}
}
