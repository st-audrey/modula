<?php
require_once 'models/model.php';

class ModelMessage extends Model {

	// Renvoie la liste des messages enregistrés dans la bdd
    public function getMessage() {
        $sql = 'SELECT * FROM message ORDER BY id DESC';
        $message = $this->executerRequete($sql);
        return $message;
    }

	//Ajouter un message
	public function addMessage($date, $hour, $email, $name, $firstname, $content, $ip){
        $sql = 'INSERT INTO message (date, hour, email, name, firstname, content, ip) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($date, $hour, $email, $name, $firstname, $content, $ip));
    }

	//Renvoie les détails d'un message
    public function getDetailMessage($id) {
        $sql = 'SELECT * FROM message WHERE id=?';
        $message = $this->executerRequete($sql, array($id));
        return $message;
    }
}

