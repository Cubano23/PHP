<?php
// classe metier 

// classe DAO
require("dao/Abi.dao.php");
require("presentation/formClient.vue.php");

$msg = "";
// script controleur saisie d'un nouveau client
// module presentation

// module DAO BDD ABI

// pour se connecter ? la BDD

//charger la liste des villes en array()
$dataVille = array();
$dataVille = AbiDAO::ListeVille();


//charge la liste des activites en array()
$dataActivite = array();
$dataActivite = AbiDAO::ListeActivite();

// afficher la fonction 
FormClient($dataVille,$dataActivite,$msg);
?>