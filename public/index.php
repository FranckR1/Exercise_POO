<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Livre;
use App\Models\LivreAudio;

// Affichage 

$livreDefaut = new Livre("Le Petit Prince","Antoine de Saint-Exupéry", 1943);

echo "livre par défaut : \n"; 
echo "Titre : " . $livreDefaut->getTitre() . "\n";
echo "Auteur : " . $livreDefaut->getAuteur() . "\n";
echo "AnneePublication : " . $livreDefaut->getAnneePublication() . "\n";

// Modification 

$livreDefaut->setTitre("New");
$livreDefaut->setAuteur("Test");
$livreDefaut->setAnneePublication("1900");

echo "\nLivre aprés modification :\n";
echo "Titre : " . $livreDefaut->getTitre() . "\n";
echo "Auteur : " . $livreDefaut->getAuteur() . "\n";
echo "AnneePublication : " . $livreDefaut->getAnneePublication() . "\n";

// Nouveau Livre

$livreNouveau = new Livre("The Lord of the Rings", "J.R.R Tolkien", 1954);

echo "\nNouveau Livre :\n";
echo "Titre : " . $livreNouveau->getTitre() . "\n";
echo "Auteur : " . $livreNouveau->getAuteur() . "\n";
echo "AnneePublication : " . $livreNouveau->getAnneePublication() . "\n"; 

// use App\Helpers\UIHelper;

// while (true) {
//     UIHelper::afficherMenu();
// }

// test de sous-class

$livreAudio = new LivreAudio("Piste Audio", "Moi", 1997, "3 minutes");


$livreAudio->getTitre();
$livreAudio->getAuteur();
$livreAudio->getDuree();


echo "\nSous-class :\n";
echo "Titre : " . $livreAudio->getTitre() . "\n";
echo "Auteur : " . $livreAudio->getAuteur() . "\n";
echo "Duree : " . $livreAudio->getDuree()  . "\n";

