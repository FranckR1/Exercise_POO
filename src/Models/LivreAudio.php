<?php

namespace App\Models;

class LivreAudio extends Livre {
    private $duree;

    public function __construct($titre, $auteur, $anneePublication, $duree) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->duree = $duree;
    }

   
    public function getDuree() {
        return $this->duree;
    }

}
