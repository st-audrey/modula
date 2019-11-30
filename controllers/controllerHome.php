<?php
	
require_once 'views/view.php';

class ControllerHome {

	public function showHome() {
       $view = new Vue("Bio");
       $view->generer();
	}	
}