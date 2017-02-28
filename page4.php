<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Location de vélo</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Call CSS -->
	<link rel="stylesheet" type="text/css" href="stylep4.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>
<!-- Bureau version -->
	<header>
		<div id="c_desktop" class="row">
			<div class="col-xs-3">
				<img src="img/VTT.png" id="c_logo" alt="logo" class=img-responsive >
			</div>
			<div class="col-xs-offset-1 col-xs-4">
				<div id="c_navbar">
					<ul>
						<li><a href="#1">Accueil</a></li>
						<li><a href="#1">Randonnées</a></li>
						<li><a href="#1">Balades en famille</a></li>
						<li><a href="#1">Location</a>	</li>
					</ul>
				</div>
			</div>
			<div id="c_météo" class="col-xs-offset-1 col-xs-3">
				<script charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'></script>
			</div>
		</div>
<!-- Mobile version -->
		<div id="c_mobile">
			<img src="img/VTT.png" id="c_logo" alt="logo" class=img-responsive>
			<div id="c_météo_mobile">
				<script  charset='UTF-8' src='http://www.meteofrance.com/mf3-rpc-portlet/rest/vignettepartenaire/771860/type/VILLE_FRANCE/size/PAYSAGE_VIGNETTE' type='text/javascript'>
				</script>
			</div>
		</div>
	</header>
<!-- Bureau version -->
	<section id="c_tarif" class="row">

		<div id="c_tarif-container" class="col-xs-offset-3 col-xs-6">
			<div id="c_vélo" class="col-xs-6">
				<ul>
					<li><h3>Tarif vélo :</h3></li>
					<li>8€ l'heure / vélo</li>
					<li>15€ la journée / vélo</li>
					<li>55€ la journée / vélo</li>
					<li>100€ les 2 semaines / vélo</li>
					<li>130€ le mois / vélo</li>
				</ul>
			</div>
			<div id="c_acces" class='col-xs-6'>
				<ul>
					<li><h3>Tarif accessoires :</h3></li>
					<li>Casque : 3€</li>
					<li>Lot de 2 gourdes : 4€</li>
					<li>Porte bébé : 5€</li>
					<li>Plan du site et des différents parcours : 8€</li>
				</ul>
			</div>
			<div id="c_infoloc" class='col-xs-offset-2 col-xs-8'>
				<p>Chaque location, quelqu'en soit la durée, fera l'objet d'un cautionnement soit par le dépôt d'un passeport, d'une CNI ou permis de conduire, restitué à la fin de la location ; soit par le dépôt d'une carte bancaire de caution de 200 euros, restitué à la fin de la location.<br/><br/>

				Le locataire doit être couvert par son assurance civile.<br/><br/>
				Découvrez Fontainebleau et sa forêt sur le site de l'office de tourisme de Fontainebleau : www.fontainebleau-tourisme.com</p>
			</div>
		</div>
	</section>
<!-- Mobile version -->

	<section id="c_tarif_mobile"">
		<div>	
			<ul>
				<li><h3>Tarif vélo :</h3></li>
				<li>8€ l'heure / vélo</li>
				<li>15€ la journée / vélo</li>
				<li>55€ la journée / vélo</li>
				<li>100€ les 2 semaines / vélo</li>
				<li>130€ le mois / vélo</li>
			</ul>
		</div>
		<div>
			<ul>
				<li><h3>Tarif accessoires :</h3></li>
				<li>Casque : 3€</li>
				<li>Lot de 2 gourdes : 4€</li>
				<li>Porte bébé : 5€</li>
				<li>Plan du site et des différents parcours : 8€</li>
			</ul>
		</div>
		<div>			
			<p>Chaque location, quelqu'en soit la durée, fera l'objet d'un cautionnement soit par le dépôt d'un passeport, d'une CNI ou permis de conduire, restitué à la fin de la location ; soit par le dépôt d'une carte bancaire de caution de 200 euros, restitué à la fin de la location.<br/><br/>

			Le locataire doit être couvert par son assurance civile.<br/><br/>
			Découvrez Fontainebleau et sa forêt sur le site de l'office de tourisme de Fontainebleau : www.fontainebleau-tourisme.com</p>
		</div>	
	</section>
<!-- Bureau version -->
	<footer>
		<div class="row">			
			<div id="c_liencontainer" class="col-xs-offset-1 col-xs-10">
				<div id="c_lien" class="row">
					<div class="col-xs-2">CLUB FACEBOOK RANDO VTT<a href="https://www.facebook.com/VttFontainebleau/?fref=ts" target="_blank"><img  src="img/logofb.png" div="c_img1" class="img-responsive" alt="randovtt"></a></div>
					<div class="col-xs-2">VILLE DE FONTAINEBLEAU<a href="http://www.fontainebleau.fr/" target="_blank"><img  src="img/villedefontainebleau.jpg" div="c_img2" class="img-responsive" alt="villedebleau"></a></div>
					<div class="col-xs-2">FÉDÉRATION FRANÇAISE DE VTT<a href="http://www.ffc.fr/discipline/vtt/" target="_blank"><img  src="img/ffv.png" div="c_img3" class="img-responsive" alt="villedebleau"></a></div>
					<div class="col-xs-2">MONITEUR VTT FONTAINEBLEAU<a href="http://www.moniteurcycliste.com/77-seine-et-marne/ecole-mcf-du-massif-de-fontainebleau" target="_blank"><img  src="img/mcf.png" div="c_img4" class="img-responsive" alt="villedebleau"></a></div>
					<div id="c_formualire" class="col-xs-4">FORMULAIRE DE CONTACT :<br/><br/><textarea placeholder="Envoyez votre question içi..." style="width:100%" rows="5"></textarea><br/><input type="submit" value="Envoyer" /></div>		
				</div>
			</div>
		</div>
		<div class="row">
			<div id="c_copyright" class="col-xs-offset-1 col-xs-10">
				<p>Copyright © WCS Fontainebleau</p>
			</div>
		</div>
	</footer>
		
</body>
</html>