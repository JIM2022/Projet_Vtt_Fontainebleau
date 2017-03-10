<h3>Ajouter une actualité :</h3>
<form action="actu_formulaire_action.php" method="POST">
	<div>
		<label for="titre">Titre :</label>
		<input id="titre" type="text" name="titre">
	</div>
	<div>
		<label for="actu">Actu :</label>
		<textarea id="actu" type="text" name="actu" cols="50" rows="10"></textarea>
	</div>
	<div>
	<input type="submit" value="Ajouter l'actu">
	</div>
</form>