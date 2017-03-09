<?php

//On vérifie que tous les champs sont remplis grâce à empty

if (
	empty($_POST['nom']) or
	empty($_POST['prenom']) or
	empty($_POST['tel']) or
	empty($_POST['email'])	
	)
{
		echo "Merci de remplir tous les champs";
		header( "refresh:3;url=index.php" );
	}
else{
	include_once 'model/connexion_bdd.php';

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$tel = htmlspecialchars($_POST['tel']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	$query = $bdd->prepare('INSERT INTO Contact (nom, prenom, tel, email, message) VALUES (?, ?, ?, ?, ?)');
	$query ->execute(array(
		$nom,
		$prenom,
		$tel,
		$email,
		$message
		));
	$query ->closeCursor();	

header( "Location:index.php" );
}

