<?php // ********** code PHP objet en couches *************** 
      // script controleur insertion de nouveau Client 
     
// classe metier 
require("metier/MAbi.php"); 
// classe DAO 
require("DAO/Abi.DAO.php"); 
require ("presentation/formClient.vue.php");
 
// instancie un objet Metier MAbi et le renseigne 
$newClient = new MClient(); 
$newClient->setNomClient($_POST["nomClient"]); 
$newClient->setTypeClient($_POST["type"]); 
$newClient->setTelClient($_POST["tel"]); 
$newClient->setEmailClient($_POST["email"]); 
$newClient->setNature($_POST["nat"]); 
$newClient->setChiffreAffaire($_POST["chiffre"]); 
$newClient->setRaisonSociale($_POST["raison"]); 
$newClient->setVille($_POST["ville"]);
$newClient->setActivite($_POST["activite"]);
 

// appel methode DAO pour insert into 
AbiDAO::insereNouveauClient($newClient) ;

$msg = "Enregistrement réussi!";

$dataVille = array();
$dataVille = AbiDAO::ListeVille();


//charge la liste des activites en array()
$dataActivite = array();
$dataActivite = AbiDAO::ListeActivite();

// afficher la fonction 
FormClient($dataVille,$dataActivite,$msg);

//rediriger vers page d'accueil
 header( "refresh:5;url = Accueil.php" );
?>


 
