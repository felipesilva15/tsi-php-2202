<?php

$dns = "mysql:dbname=senac;host=localhost:3307;";
$user = "felipe";
$pass = "";

$bd = new PDO($dns, $user, $pass);

var_dump($bd);