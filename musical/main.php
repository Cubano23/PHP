<?php 
include "musicien.php";
include "guitariste.php";
include "batteur.php";
include "chanteur.php";
include "bassiste.php";
include "groupe.php";

$guitariste = new Guitariste("Bruno",39);
$batteur = new Batteur("Ahmed",27);
$chanteur = new Chanteur("Barata", 31);
$bassiste = new Bassiste("Ali", 22);


$macade = new Groupe("Macade");
$creed = new Groupe("Creed");
//affiche le groupe 1
echo "Groupe 1: ". $macade->nom . "<br><br>";

echo $guitariste->instrument ." - ". $guitariste->nom . "<br>";
echo $batteur->instrument ." - ". $batteur->nom . "<br>";
echo $chanteur->instrument ." - ". $chanteur->nom . "<br>";
echo $bassiste->instrument ." - ". $bassiste->nom . "<br><br><br>";


//affiche le groupe 2
echo "Groupe 2: ". $creed->nom . "<br><br>";

echo $guitariste->instrument ." - ". $guitariste->nom . "<br>";
echo $batteur->instrument ." - ". $batteur->nom . "<br>";
echo $chanteur->instrument ." - ". $chanteur->nom . "<br>";
echo $bassiste->instrument ." - ". $bassiste->nom . "<br><br><br>";



$macade->addChanson("AEZR");
$macade->addChanson("ZEFC");


$macade->addMusicien($guitariste);
$macade->addMusicien($batteur);
$macade->addMusicien($chanteur);
$macade->addMusicien($bassiste);

$macade->playSong("Hello!!");



$macade->concert();




$creed->addMusicien($guitariste);
$creed->addMusicien($batteur);
$creed->addMusicien($chanteur);
$creed->addMusicien($bassiste);




?>