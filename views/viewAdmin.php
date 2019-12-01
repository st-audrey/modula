<?php

$token = bin2hex(random_bytes(32));

$_SESSION['token'] = $token;

?>

<div class="main-bg typo02">
<h1>Bienvenue sur votre espace d'administration.</h1>
<h2>Voici les messages que les visiteurs vous ont envoy&eacute;s :</h2>
</div>
<div id="snackbar">
	<div class="toast-body">
		<button id="toast-btn" class="btn-danger" type="button" class="ml-2 mb-1 close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<br>
		<strong>Nom : </strong> <div id="message-name"></div>  
		<strong>Pr&eacute;nom : </strong> <div id="message-firstname"></div>  
		<strong>Email : </strong> <div id="message-email"></div>  
		<strong>Message : </strong> <div id="message-content"></div>  
		<strong>Heure : </strong> <div id="message-hour"></div>  
		<strong>Date : </strong> <div id="message-date"></div>  
	</div>
</div>

<table class="table main-bg" id="table-message" data-token="<?php echo $token; ?>" />
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">date</th>
			<th scope="col">heure</th>
			<th scope="col">email</th>
			<th scope="col">d&eacute;tails</th>
		</tr>
	</thead>
	  
	<tbody>
		<?php foreach ($messages as $message): ?>
		<tr>
			<th scope="row"><?= $message['id'] ?></th>
			<td><?= $message['date'] ?></td>
			<td><?= $message['hour'] ?></td>
			<td><?= $message['email'] ?></td>
			<td><button id="<?= $message['id'] ?>" class="btn btn-primary btn-detail">Detail</button></td>			
		</tr>
		<?php endforeach; ?>
	</tbody>

</table>

