<?php
//Controleur de modification de client
// classe metier 
require("metier/MAbi.php");
//appelle classe DAO
require("dao/Abi.dao.php");
require("presentation/modifierClient.vue.php");

$msg = "";
if(isset($_GET["idClient"]))
{
	$idClient = $_GET["idClient"];
 } 
 
 if(isset($_POST["idClient"]))
 { 
 
	$idClient = $_POST["idClient"];
	// instancie un objet Metier MAbi et le renseigne 
	$updateClient = new MClient(); 
	$updateClient->setNomClient($_POST["nomClient"]); 
	$updateClient->setTypeClient($_POST["type"]); 
	$updateClient->setTelClient($_POST["tel"]); 
	$updateClient->setEmailClient($_POST["email"]); 
	$updateClient->setNature($_POST["nat"]); 
	$updateClient->setChiffreAffaire($_POST["chiffre"]); 
	$updateClient->setRaisonSociale($_POST["raison"]); 
	$updateClient->setVille($_POST["ville"]);
	$updateClient->setActivite($_POST["activite"]);

	// appel methode DAO pour insert into 
	AbiDAO::ModifierClient($updateClient,$idClient);
	 $msg ="Enregistrement Ok!";	
	
}
if(isset($_GET["idClientSup"]))
{
	$idClient = $_GET["idClientSup"];
	AbiDAO::SupprimerDocumentation($idClient);
	AbiDAO::SupprimerParticiper($idClient);
	AbiDAO::SupprimerContact($idClient);
	AbiDAO::SupprimerClient($idClient);
	$msg = "Suppression Ok!";
	header("location:resultatRecherche.php?mess='$msg'");
		
}
//charger la liste des villes en array()

	$dataVille = array();
	$dataVille = AbiDAO::ListeVille();


//charge la liste des activites en array()
	$dataActivite = array();
	$dataActivite = AbiDAO::ListeActivite();
	
	$resultClient= array();
	$resultClient =  AbiDAO::ResUnClient($idClient);

 AfficheClient($dataActivite,$dataVille,$idClient,$resultClient,$msg);
?>