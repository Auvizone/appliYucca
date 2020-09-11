<?php

$aliment = $_POST['aliment'];
$decoded = json_decode($aliment, true);

var_dump($aliment);

$aliment2 = $_POST['aliment2'];
$decoded = json_decode($aliment2, true);

$aliment3 = $_POST['aliment3'];
$decoded = json_decode($aliment3, true);


function test() {
    var_dump('testing');
}