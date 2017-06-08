<?php

	try {
		$bdd = new PDO('mysql:host=localhost:8889;dbname=Contact_VTT', 'root', 'root');
	}
	catch (PDOException $e){
		echo "Echec de connexion:" . $e->getMessage();
	}