<?php 

//! Display errors
ini_set('display_errors', 'On');
error_reporting(-1);

//! DBCO File
require ('db.php');
require ('json-receive.php');
require ('ajout.php');

if (isset($_POST['connexion']) && $_POST['connexion'] == 'connexion') {

    var_dump('en haut');
    if((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['password']) && !empty($_POST['password']))) {
        
        var_dump('ici');
        function validDatas($datas) {
            $datas = trim($datas);
            $datas = stripslashes($datas);
            $datas = htmlspecialchars($datas);
            return $datas;
        }
        
        $pseudo = validDatas($_POST['pseudo']);
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        var_dump($password);

        $req = $conn->prepare('SELECT id_user, password FROM connexion WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $pseudo));
        $resultat = $req->fetch();

        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

        function addDb() {
            var_dump('test')
        };
        
        if($resultat[0] == 1){
            session_start();
            $_SESSION['id_user'] = $resultat['id_user'];
            $_SESSION['pseudo'] = $pseudo;
            header('Location: ./menu.php');
        } elseif ($resultat[0] == 0) {
            echo 'Login ou mdp non reconnu';
        }
    } else {
        echo 'Mauvais Logs';
    }
} else {
    echo 'Erreur';
}
?>