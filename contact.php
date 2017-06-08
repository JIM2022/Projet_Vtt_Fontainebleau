<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Le VTT à Fontainebleau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>

<body>
<?php include 'header.php';?>
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