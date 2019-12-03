<?php
//Deconnexion de session
    require("index.php");

    //deconnexion do site
	session_destroy();
	//rediriger la page vers la page d'index	
 	 header( "location:deconnexion.vue.php" );	
?>



