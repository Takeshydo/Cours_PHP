<?php
class TacheManagers {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    //CREATE
    public function add(Tache $tache){
        $request = "INSERT INTO taches (content) VALUES (:desc)";
        $stmt = $this->db->prepare($request);//secu de request | check si diff de request |
        $stmt->execute([
            'desc'=> $tache->getDescription()
        ]);
    }

    //SELECT

    public function getAll(){
        $tachesAll = [];
        $request = "SELECT * FROM taches ORDER BY id DESC";
        $stmt = $this->db->query($request);

        $dataAll = $stmt->fetchAll(PDO::FETCH_ASSOC);//récup pls ligne grace à fetchAll => forme un tableau pour toute les itérations

        foreach ($dataAll as $dataOne){
            $tache = new Tache();
            $tache->setId($dataOne['id']);
            $tache->setDescription($dataOne['content']);
            $tache->setDateCreation($dataOne['createAt']);
            $tachesAll[] = $tache;
        }

        return $tachesAll;
    }

}