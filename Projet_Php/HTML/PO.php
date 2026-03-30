<?php

class Project {

    public $titre;
    public $description;
    public $priorite;
    public $status;
    public $assigne;
    //public $lien;

    function __construct($data)
    {
        $this->titre = $data["titre"];
        $this->description = $data["description"];
        $this->priorite = $data["priorite"];
        $this->status = $data["status"];
        $this->assigne = $data["assigne"];
        //$this->lien = $data["lien"];
    }

    public function set_new_row()
    {
        return [
            "titre" => $this->titre,
            "description" => $this->description,
            "priorite" => $this->priorite,
            "status" => $this->status,
            "assigne" => $this->assigne,
          //  "lien" => $this->lien,
        ];
    }

}
class Ticket {

    public $titre;
    public $description;
    public $priorite;
    public $status;
    public $type;
    public $project;
    public $assigner;
    //public $lien;
    //public $id;


    function __construct($data)
    {
        $this->titre = $data["titre"];
        $this->description = $data["description"];
        $this->priorite = $data["priorite"];
        $this->status = $data["status"];
        $this->type = $data["type"];
        $this->project = $data["project"];
        $this->assigner = $data["assigner"];
        //$this->lien = $data["lien"];
        //$this->id = $data["id"];

    }

    public function set_new_row()
    {
        return [
            "titre" => $this->titre,
            "description" => $this->description,
            "priorite" => $this->priorite,
            "status" => $this->status,
            "type" => $this->type,
            "project" => $this->project,
            "assigner" => $this->assigner,
            //"lien" => $this->lien,
            //"id" => $this->id,

            
        ];
    }

}