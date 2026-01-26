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
            return "Name : " . $this->name . "PV : " . $this->vie . " Force d'attaque : " . $this->force;
        }

        public function Enemyhit($Enemy){
            $Enemy->PVEnemy -= $this->force;
            return $this->name . " attaque " . $Enemy->PVEnemy . " et lui retire " . $this->force . " PV ";
        }
    }

    class Enemy {
        public $name;
        public $PVEnemy;
        public $force;

        public function __construct($name, $force){
            $this->name = $name;
            $this->force = $force;
            $this->PVEnemy = 100;
        }
        public function showinfo(){
            return "Name : " . $this->name . "PV : " . $this->PVEnemy . " Force d'attaque : " . $this->force;
        }
        public function Herohit($hero){
            $hero->vie -= $this->force;
            return $this->name . " attaque " . $hero->vie . " et lui retire " . $this->force . " PV ";
        }

    }

$hero = new Personnage("Maximus", 20);
$Enemy = new Enemy("Shadow", 15);

echo $hero->showinfo() . "<br>";
echo $Enemy->showinfo() . "<br>";

$hero->Enemyhit($Enemy) . "<br>";
echo $Enemy->showinfo() . "<br>";
$Enemy->Herohit($hero) . "<br>";
echo $hero->showinfo() . "<br>";

?>
