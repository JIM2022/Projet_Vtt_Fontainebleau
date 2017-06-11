<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Le VTT à Fontainebleau</title>
	<meta name="viewport" content="initial-scale=1">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Call CSS -->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div id="contact">
	<body>
	<?php include 'header.php';?>
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8 title_form">
					<h3>Fiche Contact :</h3>
				</div>
				<div class="col-sm-offset-2 col-sm-8">
					<form action="formulaire_index_action.php" method="POST">
						<div>
							<label for="nom">Nom :</label>
							<input class="form-control" id="nom" placeholder="Votre Nom" type="text" name="nom">
						</div>
						<div>
							<label for="prenom">Prénom :</label>
							<input class="form-control" id="prenom" placeholder="Votre Prénom" type="text" name="prenom">
						</div>
						<div>
							<label for="tel">Téléphone :</label>
							<input class="form-control" id="tel" placeholder="Votre Numéro" type="text" name="tel">
						</div>
						<div>
							<label for="mail">E-mail :</label>
							<input class="form-control" id="email" placeholder="@" type="email" name="email">
						</div>
						<div>
							<label for="message">Message :</label>
							<textarea class="form-control" id="message" placeholder="Saisissez votre message..." type="text" name="message" rows="6"></textarea>
						</div>
							<div class="col-sm-offset-2 col-sm-8 btn_form">
								<button type="submit" class="btn btn-primary btn-block">Envoyer</button>
							</div>
					</form>
				</div>
			</div>
		</div>
			<script type="text/javascript" src="js/java.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</div>

</html>