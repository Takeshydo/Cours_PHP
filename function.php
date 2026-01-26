<?php

class Smartphone {
    public $marque;
    public $modele;
    public $batterie = 50;

    public function charge(){
        $this->batterie += 10;
        echo "Charge en cours";
        echo $this->batterie;
    }
    public function appeler(){
        if($this->batterie > 0){
            return "Allo ?";
        } else{
            return "Plus de batterie";
        }
    }
}

$MonSmartphone = new Smartphone();
$MonSmartphone->marque = "Xiaomi";
$MonSmartphone->modele = "Redmi";
echo $MonSmartphone->batterie;
//echo $MonSmartphone->charge();
echo $MonSmartphone->appeler();
?>
