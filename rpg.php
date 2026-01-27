<?php
    class Personnage {
        public $name;
        public $vie;
        public $force;

        public function __construct($name, $force){
            $this->name = $name;
            $this->force = $force;
            $this->vie = 100;
        }

        public function showinfo(){
            return "Name : " . $this->name . " PV : " . $this->vie . " Force d'attaque : " . $this->force;
        }

        public function Enemyhit($Enemy){
            $Enemy->vie -= $this->force;
            return $this->name . " attaque " . $Enemy->name . " et lui retire " . $this->force . " PV ";
        }
    }

$hero = new Personnage("Maximus", 20);
$Enemy = new Personnage("Shadow", 15);

echo $hero->showinfo() . "<br>";
echo $Enemy->showinfo() . "<br>";

echo $hero->Enemyhit($Enemy) . "<br>";
echo $Enemy->showinfo() . "<br>";
echo $Enemy->Enemyhit($hero) . "<br>";
echo $hero->showinfo() . "<br>";

?>
