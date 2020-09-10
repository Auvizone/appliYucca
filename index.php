<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

</head>
<body>
    <div class="container" id="ctnr_formco" >
        <h2 id="title_co">Connectez-vous</h2>
        <form class="row" id="formco" action="/appliYucca/connexion.php" method="post">
            <div class="form-group col-lg-4 offset-lg-4" id="ctnr_input_email" >
                <input class="form-control" type="text" id="inputEmail" placeholder="Indiquez votre email" name="pseudo" required="required">
            </div>
            
            <div id="ctnr_input_pwd" class="form-group col-lg-4 offset-lg-4">
                <input class="form-control" type="password" id="inputPassword" placeholder="Indiquez votre password" name="password" required="required">
                <input class="btn" id="btnco" type="submit" name="connexion" value="connexion">
            </div>
        </form>
    </div>
</body>
</html>