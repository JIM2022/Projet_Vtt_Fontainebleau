<?php

if (is_numeric($_GET['id'])) {
	include_once 'model/connexion_bdd.php';

	$id = ($_GET['id']);

	$query = $bdd->prepare('DELETE FROM actu WHERE id = ?');
	$query->execute(array(
	$id));
	$query->closeCursor();
}

else {
	echo "Suppression imposible";
}

header('location: index.php');