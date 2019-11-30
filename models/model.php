<?php

 // Classe abstraite Modèle.
 // Possède les méthodes de connexion et d'execution des requetes SQL
abstract class Model {

    private $bdd;

    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function getBdd() {
		$host='localhost';
		$user='root';
		$password='';
		$dbname='carpenter_brut';
		$dsn='mysql:host='. $host . ';dbname=' . $dbname . ';charset=utf8';


        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO($dsn, $user, $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}