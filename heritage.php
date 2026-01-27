<?php
// Syntax pour enfant de parents | parent::__construct($variable)

class Animal
{
    public $name;
    public $poids;

    public function __construct($n, $p){
        $this->name = $n;
        $this->poids = $p;
    }

    public function manger(){
        return $this->name . " est en train de Manger";
    }
}


class Chien extends Animal{
    public $race;
    public function __construct($n, $p, $r){
        parent::__construct($n, $p);
        $this->race = $r;
    }

    public function Bark(){
        return $this->name . " Wouaf Wouaf !!!!!";
    }
}

class Chat extends Animal{
    public $CouleurPoils;
    public function __construct($n, $p, $cP){
        parent::__construct($n, $p);
        $this->CouleurPoils = $cP;
    }

    public function mioler(){
        return $this->name . " Miaou MIAOU !!!";
    }
}



$Doggo = New Chien("pablo", "45kg", "Berger Allemand");
$CatCat = New Chat("Esteban", "20kg", "Blanc, Noir, Orange");
echo $Doggo->manger() . "<br>";
echo $Doggo->Bark() . "<br>";
echo $Doggo->poids  . "<br>";

echo $CatCat->manger() . "<br>";
echo $CatCat->mioler() . "<br>";
echo $CatCat->poids  . "<br>";
?>
