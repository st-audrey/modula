<?php
	
	     
    if(!empty($_POST)) {

        $errors = array();
			
			if(empty($_POST['name']) || !preg_match('/^[A-Z]+$', ($_POST['name']) || ($_POST['name']) > 50) {
			$errors['emptyName'] = "Votre nom n'est pas valide."
			}					
	}

			//if(empty($_POST['firstname']) || !preg_match('/^[a-zA-Z]+$', ($_POST['firstname']))  || ($_POST['name']) > 50) {
			//$errors['emptyFirstname'] = "Votre prénom n'est pas valide.";

			//}

			//if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || ($_POST['email']) > 50) {
			//$errors['emptyEmail'] = "Votre email n'est pas valide.";

			//}

			//if(empty($_POST['contenu'])) {
			//$errors['emptyContenu'] = "Veuillez renseigner votre message.";

			//}

			//if(empty($_POST['rgpd'])) {
			//$errors['emptyrgpd'] = "Veuillez accepter nos conditions d'utilisations de vos données.";

			//}

			//TODO : récupérer la date, l'heure, l'ip


			