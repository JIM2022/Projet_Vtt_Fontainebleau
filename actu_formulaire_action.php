<?php

if (
	empty($_POST['titre'])OR 
	empty($_POST['actu'])

	){
		echo "Merci de remplir l'ensemble des champs"; }

	else{

		include_once 'model/connexion_bdd.php';

	$titre = ($_POST['titre']);
	$actu = ($_POST['actu']);

	$query = $bdd ->prepare('INSERT INTO actu(titre, actu) VALUES (?,?)');

	$query ->execute(array(
		$titre,
		$actu
		));
	$query ->closeCursor();

}
header ('Location: index.php');