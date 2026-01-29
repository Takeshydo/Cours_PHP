<?php
//              lien de la db |  son nom  | maniere d'encoder (accent etc....)
$host = "mysql:host=localhost;dbname=todo;charset=utf8";
$user = "root";
$password = ""; //Stock la connexion à la DB

try{

    $db = new PDO($host, $user, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection réussi";
} catch(PDOException $e) {
    die("Erreur de connexion");
}