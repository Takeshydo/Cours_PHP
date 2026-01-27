<?php
class User{
    private $pseudo;
    public $rank = "Apprenti Chef";

    /*Getter*/
    public function getPseudo(){
        return $this->pseudo;
    }
    /*Setter*/
    public function setPseudo($pseudo){
        if($pseudo != null){
            $this->pseudo = $pseudo;
        }
        else{
            return "Attribue vide";
        }
    }
}
$chef = New User();
$chef->setPseudo("Mathys");
echo "Bienvenue Chef ". $chef->getPseudo() . "<br>";

?>
