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

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
							<input type="submit" value="Ajouter une actu">
						</a>
						<h3>Actualités :</h3>

							<?php
							while ($donnee = $result->fetch()) { ?>

							<h4 id="titre">
								<?php echo $donnee['titre']; ?></h4>
							<p><?php echo $donnee['actu']; ?></p>
							<p>
								<a href="delete_action.php?id=<?php echo $donnee['id']; ?>"><input type="submit" value="Supprimer"></a>
								<a href="edit_formulaire.php?id=<?php echo $donnee['id']; ?>">
									<input type="submit" value="Editer">
								</a>

								</p>

							<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="container_fluid">
				<div class="row custom">
					<div class="col-xs-12 box_footer">
						<div class="col-xs-2">CLUB FACEBOOK RANDO VTT<a href="https://www.facebook.com/VttFontainebleau/?fref=ts" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></div>
						<div class="col-xs-2">VILLE DE FONTAINEBLEAU<a href="http://www.fontainebleau.fr/" target="_blank"><i class="fa fa-home fa-3x" aria-hidden="true"></i></a></div>
						<div class="col-xs-2">FÉDÉRATION FRANÇAISE DE VTT<a href="http://www.ffc.fr/discipline/vtt/" target="_blank"><i class="fa fa-bicycle" aria-hidden="true"></i></a></div>
						<div class="col-xs-2">MONITEUR VTT FONTAINEBLEAU<a href="http://www.moniteurcycliste.com/77-seine-et-marne/ecole-mcf-du-massif-de-fontainebleau" target="_blank"><i class="fa fa-book fa-3x" aria-hidden="true"></i></a></div>
					</div>
				</div>
			</div>
		</footer>
			<script type="text/javascript" src="java.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>





<!--<h1><img src="img/VTT.png" id="logo"></h1>

		<div class="row row_custom">
				<div class="col-xs-4">
					<p id="head">Bienvenue sur la page d'accueil du site regroupant les différentes activités liées au VTT dans Fontainebleau et ses alentours.</p>
				</div>
		</div>


		<div id="row s_info">
			<div class= "s_onglet" id="s_place1">

				<div id="add_actu"><a href="actu_formulaire.php"><input type="submit" value="Ajouter une actu"></a>
				<h3>Actualités :</h3></div>

						<?php
/*									while ($donnee = $result->fetch()) { */?>


							<h4 id="titre"><?php /*echo $donnee['titre']; */?></h4>
							<p><?php /*echo $donnee['actu']; */?></p>
							<p>
								<a href="delete_action.php?id=<?php /*echo $donnee['id']; */?>"><input type="submit" value="Supprimer"></a>
								<a href="edit_formulaire.php?id=<?php /*echo $donnee['id']; */?>">
								<input type="submit" value="Editer"></a>

							</p>

					<?php /*} */?>


			</div>

			<div class="s_onglet" id="s_place2">
				<h3>Parcours et balades :</h3>
					<p>La ville de Fontainebleau vous propose différents parcours, de randonnée ou de balade entre famille, pour tous niveaux et tous âges, validé par l’Office National des Forêts (ONF).<br/><br/><a href="randonnées.php"> Venez les découvrir !</a></p>
			</div>

			<div class="s_onglet" id="s_place3">
				<h3>Location</h3>
					<p>Venez vous équiper afin de partir à l’aventure chez « A la petite Reine »,  vélo, porte-bébé, casque ou gourde, vous trouverez tout ce qu’il vous faut pour partir à l’aventure !!</p><br/>
					<h4><a href="page4.php">Les tarifs de la location en cliquant ici</a></h4>
			</div>

		</div>

		<div id="activité_1">

		</div>

		<div id="activité_2">

		</div>

		<footer class="row">
			<h3>Contact :</h3>
				<form div="formulaire" action="formulaire_index_action.php" method="POST">
					<div>
						<label for="nom">Nom :</label>
						<input id="nom" placeholder="Dupont" type="text" name="nom">
					</div>
					<div>
					<label for="prenom">Prénom :</label>
					<input id="prenom" placeholder="Michel" type="text" name="prenom">
					</div>
					<div>
						<label for="tel">Téléphone :</label>
						<input id="tel" placeholder="06.25.74..." type="text" name="tel">
					</div>
					<div>
						<label for="mail">E-mail :</label>
						<input id="email" placeholder="dupont.michel@gmail.com" type="email" name="email">
					</div>
					<div>
						<label for="message">Message :</label>
						<textarea id="message" placeholder="Saisissez votre message..." type="text" name="message" rows="6"></textarea>
					</div>
					<input type="submit" value="Envoyer">
				</form>

		</footer>

	</div>

		<div class="meteo">

			<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PORTRAIT_VIGNETTE' type='text/javascript'></script>

		</div>

		<div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84726.97578082202!2d2.6115195264372346!3d48.42355814408098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f38bf6baad81%3A0x40b82c3688c5a90!2s77300+Fontainebleau!5e0!3m2!1sfr!2sfr!4v1488202301496" width="22%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>-->