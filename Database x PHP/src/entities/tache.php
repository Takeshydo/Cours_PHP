<?php

class Tache{

    private $id;
    private $description;
    private $datecreation;

    /*Getter*/

    public function getId(){
        return $this->id;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getDatecreation(){
        return $this->datecreation;
    }

    /*Setter*/
    public function setId($id){
        $this->id = $id;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setDatecreation($datecreation){
        return $this->datecreation = $datecreation;
    }
}