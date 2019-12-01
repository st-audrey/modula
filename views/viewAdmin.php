<?php

$token = bin2hex(random_bytes(32));

$_SESSION['token'] = $token;

?>

<div id="snackbar">

	<div class="toast-body">

		 <strong>Nom : </strong> <div id="message-name"></div>  
		 <strong>Prénom : </strong> <div id="message-firstname"></div>  
		 <strong>Email : </strong> <div id="message-email"></div>  
		 <strong>Message : </strong> <div id="message-content"></div>  
		 <strong>Heure : </strong> <div id="message-hour"></div>  
		 <strong>Date : </strong> <div id="message-date"></div>  
	</div>
</div>

<table class="table" id="table-message" data-token="<?php echo $token; ?>" />
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">date</th>
			<th scope="col">heure</th>
			<th scope="col">email</th>
			<th scope="col">détails</th>
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

