<?php

function insertAliment($nom, $charge) 
{
    var_dump('fonction insertAliment');
    global $db;
    $sql = 'INSERT INTO aliments (nom, charge) VALUES (:nom, :charge)';
    $req = $db->prepare($sql);
    $req->execute([
        'nom' => $nom,
        'charge' => $charge
    ]);
}

$registration = $_POST['registration'];

if ($registration == "success"){
    var_dump('ca passe ici');
    test();
}

function test() {
    var_dump('test');
}