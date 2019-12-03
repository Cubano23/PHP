<?php 
//Début de la fonction
function AfficheLogin($msg){
	
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<meta charset="utf-8">
<title>Login</title>
<script>
/*fonction pour valider le formulaire*/
function valider() 
  // si la valeur du champ nom et mot de passe sont  vide
 {
   if(document.form.util.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form.util.focus();
     return false;
    }
     if(document.form.pass.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form.pass.focus();
     return false;
    }
    

}
</script>
</head>
 
<body>



<div id="formulaire">
<!--formulaire de login-->
<form name="form" action="index.php" method="post"  id="form" onsubmit="valider();">
  <label>Utilisateur</label>
  <input type="text" name="util" id="util" placeholder="Utilisateur" ">
  <label>Password</label>
  <input type="password" name="pass" id="pass" placeholder="mot de passe">
  <input type="submit" name="login" id="login" value="Login">
  <input  type="reset" name="res" id="res" value="Recommencer"/>
</form>
<!--Affiche msg de erreur...-->
<?php echo $msg;?>
</div>

<br>
<div align="center">
<iframe align="middle" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2670.677016997586!2d-4.030322999999999!3d47.981302!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4810d64d6cdcc065%3A0xc9d8788db7adf697!2sAbi+Bretagne!5e0!3m2!1sfr!2sfr!4v1410443997236" width="400" height="300" frameborder="0" style="border:0"></iframe>
</div>


</body>
</html>
<?php
}
?>