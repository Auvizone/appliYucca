<?php
session_start();
if(!isset($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Application Yucca</title>
</head>
<body>
        <a href="./logout.php">Déconnexion</a>
    <section>
        <div class="title">Application Charge Glycémique</div>

        <p class="titreselec">Aliments sélectionnés (3 maximum)</p>
        <div id="selectionnes">
            <div class="selec" id="selec1"></div>
            <div class="selec" id="selec2"></div>
            <div class="selec" id="selec3"></div>
            <button id="remove">Retirer aliments</button>
        </div>
        <div id="total"></div>
        <button id="calcul">Calculer</button>
        <button id="ajoutMenu">Ajouter Menu</button>

        <div id="aliments"></div>
    </section>
    
    <script type="text/javascript" src="data.json"></script>
    <script src="app.js"></script>
</body>
</html>