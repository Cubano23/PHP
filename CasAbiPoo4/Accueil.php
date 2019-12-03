<?php
//controleur pour passe a la page principale
session_start();
require("presentation/Accueil.vue.php");
require ("dao/Abi.dao.php");
if(!isset($_SESSION['util']) && (!isset($_SESSION['pass'])))
{
	//rediriger vers page d'index cas erreur de login
	header('location:index.php');
}
else
{


// afficher la fonction 
AfficheAccueil();
}



?>