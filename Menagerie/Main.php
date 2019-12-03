<?php
include "Animal.php";
include "Chat.php";
include "Singe.php";
include "Chien.php";
include "Lion.php";
include "Menagerie.php";
include "Enclos.php";


$chat = new Chat("KittyKat",2);
$chien = new Chien("Medor",5);
$singe = new Singe("Kong",4);
$lion = new Lion("Simba",10);

$menagerie = new Menagerie();
$menagerie->addEnclos(new Enclos("Savane",5,"Lion"));
$menagerie->addEnclos(new Enclos("Arbre a chats",5,"Chat"));
$menagerie->addEnclos(new Enclos("Niche",5,"Chien"));
$menagerie->addEnclos(new Enclos("Forêt",5,"Singe"));

$enclosLion = $menagerie->findEnclos("Savane");

$enclosLion->addAnimal($lion);

$enclosLion->ShutdownTemperature(20);

var_dump($menagerie->enclos);

include "index.phtml";
?>