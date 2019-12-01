<table class="table">
	<thead>
		<tr>
			<th scope="col">date</th>
			<th scope="col">heure</th>
			<th scope="col">email</th>
			<th scope="col">d�tails</th>
			<th scope="col">suppression</th>
		</tr>
	</thead>
	  
	<tbody>
		<?php foreach ($messages as $message): ?>
		<tr>
			<th scope="row"><?= $message['date'] ?></th>
			<td><?= $message['hour'] ?></td>
			<td><?= $message['email'] ?></td>
			<td><a class="btn btn-primary" href="index1.php?type=messages&action=details" role="button">d�tails</a></td>
			<td><a class="btn btn-primary" href="index1.php?type=messages&action=supprimer&id_message=<?= $message['id_message'] ?>" role="button">X</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

