<table class="table">
	<thead>
		<tr>
			<th scope="col">date</th>
			<th scope="col">heure</th>
			<th scope="col">email</th>
			<th scope="col">détails</th>
			<th scope="col">suppression</th>
		</tr>
	</thead>
	  
	<tbody>
		<?php foreach ($messages as $message): ?>
		<tr>
			<th scope="row"><?= $message['date'] ?></th>
			<td><?= $message['hour'] ?></td>
			<td><?= $message['email'] ?></td>
			<td><a class="btn btn-primary" href="index.php?type=message&action=detail" role="button">?</a></td>
			<td><a class="btn btn-primary" href="index.php?type=message&action=supprimer&id_message=<?= $message['id'] ?>" role="button">X</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

