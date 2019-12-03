
<?php
//Début de la fonction
function AfficheUnClient($resultClient,$idClient){
	?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style_2.css" >
<title>Resultat</title></head>
<body>
<a href="Accueil.php"><img src="css/img/home.png" width="50" height="50"/></a>
<table class="slogan">
	<tr>
		<td>Voici le client que vous selectionne</td>
	</tr>
	<!--Affiche table de Client-->
</table>


  	<table class="slogan" border=2>
	<tr>
		<th>Modifier</th>
		<th>Nom</th>
		<th>Raison Sociale</th>
		<th>Chiffre de Affaires</th>
		<th>Nature</th>
		<th>Email</th>
		<th>Telephone</th>
		<th>Type</th>
		<th>Secteur Activite</th>
		<th>Ville</th>
		
	</tr>
<?php
	foreach($resultClient as $row):		
	
?>
	<tr>
		<td>
			<a href="modifierClient.php?idClient=<?php echo $row["idClient"];?>">Modifier</a>
		</td>
	

		<td>
			<?php echo $row["nomClient"];?>
		</td>
	
	
		<td>
			<?php echo $row["raisonsociale"];?>
		</td>
	
	
		<td>
			<?php echo $row["chiffreaffaires"];?>
		</td>
	
	
		<td>
			<?php echo $row["nature"];?>
		</td>
	
	
		<td>
			<?php echo $row["emailclient"];?>
		</td>
	
	
		<td>
			<?php echo $row["telclient"];?>
		</td>
		<td>
			<?php echo $row["typeclient"];?>
		</td>
		<td>
			<?php echo $row["secteur"];?>
		</td>
		<td>
			<?php echo $row["libelleVille"];?>
		</td>
	</tr>
<?php
	endforeach;
?>
</table>	
  	
  		

</body>
</html>
<?php
//fin de la fonction
}
?>