<?php
//controleur resultat de recherche des clients
require("presentation/resultatRecherche.vue.php");
//classe DAO
require("dao/Abi.dao.php");
$msg = "";
if(isset($_GET['mess']))
{
	$msg=$_GET['mess'];
}
$dataClient = array();
$dataClient = AbiDAO::RechercheClient();

// afficher la fonction
AfficheClient($dataClient,$msg);

?>