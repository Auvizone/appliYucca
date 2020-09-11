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