<?php

require_once 'models/model.php';

class ModelAdmin extends Model {

    public function getAdmin($login) {
        $sql = 'SELECT * FROM admin where login=?';
        $admin = $this->executerRequete($sql, array($login));
        return $admin;
    }
}

