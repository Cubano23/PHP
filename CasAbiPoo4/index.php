
<?php
//initialiser la session
session_start();
require("presentation/index.vue.php");
require("dao/Abi.dao.php");

//controleur de login
$msg = "";

if((!(isset($_SESSION['util'])))and (!isset($_SESSION['pass'])))
{
	if((isset($_POST['util'])) && (isset($_POST['util'])))
	{
	$utilisateur = $_POST['util'];
	$motPass   = $_POST['pass'];
	$ctrl=AbiDAO::LoginAbi($utilisateur,$motPass);	
		if($ctrl == 0)
		{
		 $msg = '<font color="red">Erreur de login!</font>';	 
		}
		else
		{
			$utilisateur = strtolower($utilisateur);		
			$_SESSION['util'] = $utilisateur;
			$_SESSION['pass']   = $motPass;		
			header("Location: Accueil.php");		
		}
	}
		AfficheLogin($msg);
}

else
{
	//rediriger vers page d'accueil
	header("Location: Accueil.php");
}
?>