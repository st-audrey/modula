<?php
require_once 'models/model.php';

class ModelMessage extends Model {

	// Renvoie la liste des messages enregistrés dans la bdd
    public function getMessages() {
        $sql = 'SELECT * FROM message';
        $message = $this->executerRequete($sql);
        return $message;
    }

	//Ajouter un message
	public function addMessage($date, $hour, $email, $name, $firstname, $content, $ip){
        $sql = 'INSERT INTO message (date, hour, email, name, firstname, content, ip) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $this->executerRequete($sql, array($date, $hour, $email, $name, $firstname, $content, $ip));
    }

	// Supprimer un message
	public function deleteMessage($id){
        $sql = 'DELETE FROM message WHERE id_message=?';
        $this->executerRequete($sql, array($id));
    }

}