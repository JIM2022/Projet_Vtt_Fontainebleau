<?php
if 
	(empty($_POST['titre']) OR
	empty($_POST['actu'])
	){
		echo "Merci de remplir tous les champs."?> <a href="edit_formulaire.php?id=<?php echo $_GET['id']; ?>"><input type="submit" value="Retour au formulaire"></a><?php ;
	}

elseif (is_numeric($_GET['id'])) {

	include_once 'model/connexion_bdd.php';

	$titre = htmlspecialchars($_POST['titre']);
	$actu = htmlspecialchars($_POST['actu']);


	$query = $bdd->prepare('UPDATE actu SET titre = :titre, actu = :actu WHERE id= :id ');
	$query -> execute(array(
		':titre' => $titre,
		':actu' => $actu,
		':id' => $_GET['id']
		));
	$query ->closeCursor();
echo "Vos modifications ont bien été prises en comptes !";
header ("refresh:3;url=index.php");
}

