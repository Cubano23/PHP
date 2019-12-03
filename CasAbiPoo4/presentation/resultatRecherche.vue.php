
<?php
//Début de la fonction
function AfficheClient($dataClient,$msg){
	?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style_2.css" >
<title>Resultat</title></head>
<body>
<a href="Accueil.php"><img src="css/img/home.png" width="50" height="50"/></a>
<div class="slogan"><?php echo $msg ?></div>
<table class="slogan">
	<tr>
		<td>Liste de clients</td>
	</tr>
</table>
<table class="slogan">
	<tr>
		<th>Visualiser</th>
		<th>Nom</th>
	</tr>
<?php
	foreach($dataClient as $row):
	
		
	
?>

	<tr>
		<td>
			<a href="resUnClient.php?idClient=<?php echo $row["idClient"];?>">Visualiser</a>
		</td>
	
	
	
		<td>
			<?php echo $row["nomClient"];?>
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