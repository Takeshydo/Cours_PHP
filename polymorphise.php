<?php
class Guerrier {
    public function attaquer(){
        return "le guerrier donne un coup";
    }
}

class Archer extends Guerrier {
    public function attaquer(){
        return "l'archer tire une flèche";
    }
}

class Mage extends Guerrier {
    public function attaquer(){
        return "le mage lance une boule de feu";
    }
}


$legolas = new Archer();
$gandalf = new Mage();

echo $legolas->attaquer(). "<br>";
echo $gandalf->attaquer();
?>
