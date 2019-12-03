<?php

//Début de la fonction
function AfficheAccueil(){
	
	$cejour = getdate(); 
//$libmois[] = array ('janvier', 'fÃ©vrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'dÃ©cembre' ); 
$libmois[1] = 'janvier'; 
$libmois[2] = 'fÃ©vrier'; 
$libmois[3] = 'mars'; 
$libmois[4] = 'avril'; 
$libmois[5] = 'mai'; 
$libmois[6] = 'juin'; 
$libmois[7] = 'juillet'; 
$libmois[8] = 'aout'; 
$libmois[9] = 'septembre'; 
$libmois[10] = 'octobre'; 
$libmois[11] = 'novembre'; 
$libmois[12] = 'dÃ©cembre'; 

	?>
<!doctype html>
<html>
<head>
<script>
	function valider() 
  // si la valeur du champ nom et mot de passe sont  vide
 {
   if(document.form2.selectClient.value == "")
    {
     alert("Veuillez selectionez un client!");
     document.form2.selectClient.focus();
     return false;
    }
 }
	
</script>

<meta charset="utf-8">
<title>Accueil</title>
<link rel="stylesheet" type="text/css" href="css/styleAccueil.css" >
</head>
<body>
<?php
//variables de session
$session_util = $_SESSION["util"];
echo $cejour["mday"] . " " . $libmois[$cejour["mon"]] . " " . $cejour["year"];
?>
<div>
<!--afficher Bienvenue sur le site ABI! + nom d'utilisateur-->
<h4>Bienvenue sur le site ABI! :<?php  echo $session_util;   ?></h4>
</div>
<h4 class="slogan"> ACTIVE  BRETAGNE  INFORMATIQUE </h4>


<!--hover menu-->
<nav>
  <UL>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
        <i class="icon-mobile-phone icon-2x"></i>
        </div>
        <a href="contenu.php"><span>À propos de nous</span></a>
      </div>
   </li>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
        <i class="icon-lightbulb icon-2x"></i>
        </div>
        <a href="resultatRecherche.php"><span>Client</span></a>
      </div>
   </li>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
        <i class="icon-wrench icon-2x"></i>
        </div>
        <a href="formClient.php"><span>Nouveau Client</span></a>
      </div>
   </li>
   <li class="var_nav">
      <div class="link_bg"></div>
      <div class="link_title">
        <div class=icon> 
        <i class="icon-briefcase icon-2x"></i>
        </div>
      <a href="deconnexion.php"><span>Déconnecté</span></a>
      </div>
   </li>
  </UL>

</nav>




<!-- fin menu-->

</body>
</html>

<?php
//fin de la fonction
}
?>