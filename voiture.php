<?php

class Voiture {

    public $marque;
    public $couleur;
    public $estDemarree;
}

//Set maVroum
$maVroum = new Voiture();
$maVroum->marque = "Ferrari";
$maVroum->couleur = "Jaune";
$maVroum->estDemarree = true;

//Set maClio
$maClio= new Voiture();
$maClio->marque="Renault";
$maClio->couleur = "Grise";
$maClio->estDemarree = false;

echo $maVroum->marque . "<br>";
echo $maVroum->couleur . "<br>";
echo $maClio->couleur . "<br>";
echo $maClio->estDemarree . "<br>";


?>
