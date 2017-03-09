<?php

	try {
		$bdd = new PDO('mysql:host=localhost;dbname=Contact_VTT', 'root', 'jecode4bleau');
	}
	catch (PDOException $e){
		echo "Echec de connexion:" . $e->getMessage();
	}