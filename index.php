<?php 
include 'model/connexion_bdd.php';
$result = $bdd->query('SELECT * FROM actu ORDER BY id DESC');

?>
<!DOCTYPE html>

	<html lang="en">
		<head>
			<title>Le VTT à Fontainebleau</title>

			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="icon" href="#" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		</head>

	<body>
		<div class="container-fluid">
			<?php include 'header.php';?>
			<div class="row custom">
				<div class="col-xs-offset-3 col-xs-9 box">
					<div class="title">
						<p id="head">Bienvenue sur la page d'accueil du site regroupant les différentes activités liées au VTT sur le Secteur de Fontainebleau et ses alentours.</p>
					</div>
				</div>
			</div>
		</div>
			<div class="container-fluid">
				<div class="row custom">
					<div class="col-md-2">
						<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PORTRAIT_VIGNETTE' type='text/javascript'></script>
					</div>
					<div class="col-md-4 box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84726.97578082202!2d2.6115195264372346!3d48.42355814408098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f38bf6baad81%3A0x40b82c3688c5a90!2s77300+Fontainebleau!5e0!3m2!1sfr!2sfr!4v1488202301496" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6">
						<div id="add_actu">
							<a href="actu_formulaire.php">
								<button type="submit" value="Ajouter une actu" class="btn btn-primary btn-md">Ajouter une Actu</button>
							</a>
							<h3>Actualités :</h3>

								<?php
								while ($donnee = $result->fetch()) { ?>

								<h4 id="titre">
									<?php echo $donnee['titre']; ?></h4>
								<p><?php echo $donnee['actu']; ?></p>
								<p>
									<a href="delete_action.php?id=<?php echo $donnee['id']; ?>">
										<button type="submit" value="Supprimer" class="btn btn-primary btn-md">Supprimer</button>
									</a>
									<a href="edit_formulaire.php?id=<?php echo $donnee['id']; ?>">
										<button type="submit" value="Editer" class="btn btn-primary btn-md">Editer</button>
									</a>
								</p>

								<?php } ?>
						</div>
					</div>
				</div>
			</div>
				<script type="text/javascript" src="java.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>





