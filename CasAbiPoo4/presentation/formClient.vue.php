<?php
//Début de la fonction
function FormClient($dataVille,$dataActivite,$msg){
	


?>

<!doctype html>
<html>
<head>
<title>Formulaire Client</title>
<link rel="stylesheet" type="text/css" href="css/style_2.css" >
<meta charset="utf-8">
<script type="text/javascript">

/*fonction pour valider le formulaire*/
function valider(email) 
  // si la valeur du champ nom et mot de passe sont  vide
 {
   if(document.form1.nomClient.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.nomClient.focus();
     return false;
    }
   if(document.form1.type.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.type.focus();
     return false;
    }
     if(document.form1.tel.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.tel.focus();
     return false;
    }
     
     if(document.form1.nat.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.nat.focus();
     return false;
    }
     if(document.form1.chiffre.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.chiffre.focus();
     return false;
    }
     if(document.form1.raison.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.raison.focus();
     return false;
    }
     if(document.form1.ville.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.ville.focus();
     return false;
    }
     if(document.form1.activite.value == "")
    {
     alert("Veuillez remplir tous les champs!");
     document.form1.activite.focus();
     return false;
    }
    //controle de saisie email
if ((document.form1.email.value == "")|| ( email.indexOf("@") == -1 ) || ( email.indexOf("@") == 0 ) || ( email.indexOf("@") != email.lastIndexOf("@") ) || ( email.indexOf(".") == email.indexOf("@")-1 ) || ( email.indexOf(".") == email.indexOf("@") +1 ) || ( email.indexOf("@") == email.length -1 ) || ( email.indexOf (".") == -1 ) || ( email.lastIndexOf (".") == email.length -1 ) )
{
	
	 document.form1.email.focus();
	alert( "Email incorrect!" ) ;
	return false;
	
}


}

</script>


</head>
<body>
<a href="Accueil.php"><img src="css/img/home.png" width="50" height="50"/></a>
<div class="slogan"><?php echo $msg ?></div>

<table class="slogan">
	<tr>
		<th>Formulaire d'insertion nouveau client:</th>
	</tr>
<form name="form1" method="post" action="enregClient.php"  onsubmit="return valider(document.getElementById('email').value)">
	
	<tr>
		<td>

  <label>Nom Client</label>
  <input type="text" name="nomClient" id="nomClient" placeholder="Client">
  		</td>
  	</tr>
  	<tr>
  		<td>
  <label>Type</label>
  <input type="text" name="type" id="type" placeholder="Type"> 
   		</td>
   	</tr>
   	<tr>
   		<td>
   <label>Telephone</label>
  <input type="text" name="tel" id="tel" placeholder="Tel">
  		</td>
  	</tr>
  	<tr>
  		<td>
   <label>Email</label>
  <input type="text" name="email" id="email" placeholder="Email">
  		</td>
  	</tr>
  	<tr>
  		<td>
   <label>Nature</label>
  <input type="text" name="nat" id="nat" placeholder="Nature">
  		</td>
  	</tr>
  	<tr>
  		<td>
   <label>Chiffre d'Affaire</label>
  <input type="text" name="chiffre" id="chiffre" placeholder="Chiffre d'Affaire">
  		</td>
  	</tr>
  	<tr>
  		<td>
   <label>Raison Sociale</label>
  <input type="text" name="raison" id="raison" placeholder="Raison Sociale">
		</td>
	</tr>
   
  	<tr>
  		<td>
  
  <select name="ville">
  				<option value="">Selectionnez une ville</option>
  	
			<?php
					foreach($dataVille as $row)
				{
			?>
				<option value = "<?php  echo $row["idVille"]; ?>"><?php  echo $row["libelleVille"];?></option>
			<?php  
				}
			?>
	</select>
	
	 <select name="activite">
  				<option value="">Selectionnez une Activite</option>
  	
			<?php
					foreach($dataActivite as $row)
				{
			?>
				<option value = "<?php  echo $row["idActivite"]; ?>"><?php  echo $row["secteur"];?></option>
			<?php  
				}
			?>
	</select>
		  
  <input  type="submit" name="Enregistrer" id="Enregistrer" value="Enregistrer" style="background-color: #3ec14a">
  		</td>
	</tr>
    
</form>
	
</table>



</body>
</html>
<?php
//fin de la fonction
}
?>