<?php

namespace App\Models;

class Livre {
    private $titre;
    private $auteur;
    private $anneePublication;

    public function __construct($titre, $auteur, $anneePublication) {
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->anneePublication = $anneePublication;
    }

    // Get

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur(){
        return $this->auteur;
    }
    public function getAnneePublication(){
        return $this->anneePublication;
    }


    // Set

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }
    public function setAnneePublication($anneePublication){
        $this->anneePublication = $anneePublication;
    }
}

