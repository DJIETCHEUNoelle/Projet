<?php

$host='localhost';
$db='projettest';
$user='root';
$pass='root';

//connexion a la base de donnee

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("erreur de connexion:" .$e->getMessage());
}


?>