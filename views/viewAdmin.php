<table class="table">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">date</th>
			<th scope="col">heure</th>
			<th scope="col">email</th>
			<th scope="col">d�tails</th>
			<th scope="col">suppression</th>
		</tr>
	</thead>
	  
	<tbody>
		<?php foreach ($messages as $messages): ?>
		<tr>
			<th scope="row"><?= $messages['id_message'] ?></th>
			<td><?= $messages['date_message'] ?></td>
			<td><?= $messages['heure_message'] ?></td>
			<td><?= $messages['email_message'] ?></td>
			<td><a class="btn btn-primary" href="index1.php?type=messages&action=details" role="button">d�tails</a></td>
			<td><a class="btn btn-primary" href="index1.php?type=messages&action=supprimer&id_message=<?= $message['id_message'] ?>" role="button">X</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>


<!--TODO : 1- r�cup�rer tous les messages : 
	//	2- affichage tri�s par date et heure (les plus r�cents en premier), afficher date, heure et email issu du formulaire
	//	3- affichage complet avec nom, pr�nom, email, date, heure et message envoy�.
	// + permettre suppression message		-->
<!-- TODO : d�tails au click sur le bouton d�tail un dropdown avec en plus des infos d�j� affich�es, le nom, pr�nom et message complet -->