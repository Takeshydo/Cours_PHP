<?php

class Vehicule {
    public $marque;
    public $prix;
    public function __construct($m, $p) {
        $this->marque = $m;
        $this->prix = $p;
    }
    public function showinfo() {
        return "La marque est : " . $this->marque . " le prix de " . $this->prix . " €" . "<br>";
    }
}

class Terrestre extends Vehicule {
    public $nbroues;

    public function __construct($m, $p, $nbR) {
        parent::__construct($m, $p);
        $this->nbroues = $nbR;
    }
}

class Marin extends Vehicule {
    public $TypeCoque;

    public function __construct($m, $p, $cT) {
        parent::__construct($m, $p);
        $this->TypeCoque = $cT;
    }
}

class voiture extends Terrestre {
    public $clim;

    public function __construct($m, $p, $nbR, $c) {
        parent::__construct($m, $p, $nbR);
        $this->clim = $c;
    }
}

class moto extends Terrestre {
    public $typeGuidon;

    public function __construct($m, $p, $nbR, $tG) {
        parent::__construct($m, $p, $nbR);
        $this->typeGuidon = $tG;
    }
}

class bateau extends Marin {
    public $nbVoiles;

    public function __construct($m, $p, $cT, $nbV) {
        parent::__construct($m, $p, $cT);
        $this->nbVoiles = $nbV;

    }
}

class SousMarin extends Marin {
    public $ProfondeurMax;
    public function __construct($m, $p, $cT, $pM) {
        parent::__construct($m, $p, $cT);
        $this->ProfondeurMax = $pM;
    }
}


$ferrari = New voiture("Ferrari", 2000000, 4, true);

echo $ferrari->showinfo() . "<br>";
?>
