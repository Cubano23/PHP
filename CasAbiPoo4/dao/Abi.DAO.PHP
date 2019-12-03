<?php // ********** code PHP objet en couches *************** 
      // classe DAO BDD ABI 
    
class AbiDAO{ 
	


  // fonction de connection à la BDD ABI
  private static function ConnectAbi() {
  	$user = "srsbruno";
  	$password = "1234"; 
    $host = "localhost"; 
    $bdd =  "abi"; 
      
    $mysqli = new mysqli($host, $user, $password, $bdd) or die("Erreur de connexion au serveur MySQL"); 
    $mysqli->set_charset('utf8'); 
    return $mysqli; 
  } 
 

  private static function Disconnect_abi($mysqli){ 
    $mysqli->close(); 
  } 
 	//fonction recherche tous les villes de la table ville
  public static function ListeVille()
  { 
    // connection BDD 
    $mysqli = AbiDAO::ConnectAbi(); 
	//recupere la liste de villes de la table ville
	 $sql = "select idVille,libelleVille from ville" ;
	// echo $sql; // pour mise au point 
	 $result = $mysqli->query($sql) or die ("Requête SQL invalide"); 
	 $dataVille = array(); 
	while($row = $result->fetch_array())
	{ 
	  $dataVille[] = $row; 
	}  
	//facultatif, pour faire propre… 
	$result->free();   
	AbiDAO::Disconnect_abi($mysqli); 

	return $dataVille; 
  }
  public static function AfficheClient()
  {
  	    // connection BDD 
    $mysqli = AbiDAO::ConnectAbi();
    //Recupere la liste d'activite de la table activite
    $sql = "select idClient, nomClient from client";
    $result = $mysqli->query($sql) or die ("Requête SQL invalide");
    $dataClient = array();
    while($row = $result->fetch_array())
    {
		$dataClient[] = $row;
	}
	
	//facultatif, pour faire propre… 
	$result->free();   
	AbiDAO::Disconnect_abi($mysqli);
	
	return $dataClient;
  }
 	//fonction recherche tous les secteurs de activite
  public static function ListeActivite()
  {
    // connection BDD 
    $mysqli = AbiDAO::ConnectAbi();
    //Recupere la liste d'activite de la table activite
    $sql = "select idActivite,secteur from activite";
    $result = $mysqli->query($sql) or die ("Requête SQL invalide");
    $dataActivite = array();
    while($row = $result->fetch_array())
    {
		$dataActivite[] = $row;
	}
	
	//facultatif, pour faire propre… 
	$result->free();   
	AbiDAO::Disconnect_abi($mysqli);
	
	return $dataActivite;
    
  }
  
  // controle de login
  public static function LoginAbi($user, $pass)
  {
  	
 	 // connection BDD 
	$conn = AbiDAO:: ConnectAbi();
	//requete pour varifier si utilisateur exist
	$sql = "SELECT * FROM utilisateur WHERE login ='$user' AND motPass = '$pass' ";
	$query = mysqli_query($conn,$sql) or die('<html><head><title>Erreur!</title></head><body><h1>Erreur de connexion!</h1></body></html>');
	$ctrl  = mysqli_num_rows($query);

	return $ctrl;
} 
	//fonction pour ajouter un client a la table client
  public static function insereNouveauClient($newClient){

	$conn = AbiDAO:: ConnectAbi();
	//requete pour ajouter un client
	$sqlClient = 'INSERT INTO client(nomclient,typeclient,telclient,emailclient,nature,chiffreaffaires,raisonsociale,idActivite,idVille) VALUES (';

    $sqlClient .= '\'' . $newClient->getNomClient() . '\', '; 
    $sqlClient .= '\'' . $newClient->getTypeClient() . '\', '; 
    $sqlClient .=  $newClient->getTelClient() . ', '; 
    $sqlClient .= '\''. $newClient->getEmailClient() .'\', '; 
    $sqlClient .='\''. $newClient->getNature() . '\', '; 
    $sqlClient .=   $newClient->getChiffreAffaire() .', ' ; 
    $sqlClient .=  $newClient->getRaisonSociale() .', '; 
    $sqlClient .=  $newClient->getVille() . ', ';
    $sqlClient .=   $newClient->getActivite() .');';
      
          //echo $sqlClient; // pour test 
    mysqli_query($conn, $sqlClient) or die ('Requete SQL insert invalide!!!');
}
	//fonction recherche client a la base de donnees
 
 public static function ResUnClient($idClient)
{
	$conn = AbiDAO:: ConnectAbi();
	$sql ="select idClient,nomClient, typeclient,telclient,emailclient,nature,chiffreaffaires,raisonsociale,secteur,libelleVille,client.idVille,client.idActivite from client,ville,activite where idClient='$idClient' and client.idVille = ville.idVille and client.idActivite = activite.idActivite ";
    $result = $conn->query($sql) or die ("Requête SQL invalide");
    $dataClient = array();
    while($row = $result->fetch_array())
    {
		$dataClient[] = $row;
	}
	
	//facultatif, pour faire propre… 
	$result->free();   
	AbiDAO::Disconnect_abi($conn);
	
	return $dataClient;
}
 public static function RechercheClient()
  {
    // connection BDD 
    $mysqli = AbiDAO::ConnectAbi();
    //Recupere la liste d'activite de la table activite
    $sql = "select idClient,nomClient, typeclient,telclient,emailclient,nature,chiffreaffaires,raisonsociale from client";
    $result = $mysqli->query($sql) or die ("Requête SQL invalide");
    $dataClient = array();
    while($row = $result->fetch_array())
    {
		$dataClient[] = $row;
	}
	
	//facultatif, pour faire propre… 
	$result->free();   
	AbiDAO::Disconnect_abi($mysqli);
	
	return $dataClient;
    
  }
  public static function ModifierClient($updateClient,$idClient)
  {
  	$conn = AbiDAO:: ConnectAbi();
	//requete pour ajouter un client
	$sqlClient = 'update client set

    nomclient = \''  . $updateClient->getNomClient() . '\',  
    typeclient=\'' . $updateClient->getTypeClient() . '\',  
    telclient='.  $updateClient->getTelClient() . ',  
    emailclient=\''. $updateClient->getEmailClient() .'\', 
    nature=\''. $updateClient->getNature() . '\',  
    chiffreaffaires='.$updateClient->getChiffreAffaire() .',  
    raisonsociale='.$updateClient->getRaisonSociale() .',  
    idVille='.$updateClient->getVille() . ', 
    idActivite='.$updateClient->getActivite() .' where idClient=' . (int)$idClient .';';
      /*echo $sqlClient;
      break;*/
          //echo $sqlClient; // pour test 
    mysqli_query($conn, $sqlClient) or die ('Requete SQL insert invalide!!!');
  	
  }
   public static function SupprimerDocumentation($idClient)
  {
  		$conn = AbiDAO:: ConnectAbi();
  		$sql = 'select idContact from contact  where idClient = ' . (int)$idClient;
  		$sql2 = 'delete from documentation where idContact = ('. $sql . ');';
  		
  		/*	echo $sql2;
  		break;*/
  		mysqli_query($conn, $sql2) or die ('Requete SQL insert invalide');
  		
  }
  public static function SupprimerParticiper($idClient)
  {
  		$conn = AbiDAO:: ConnectAbi();
  		$sql = 'select idContact from contact  where idClient = ' . (int)$idClient;
  		$sql2 = 'delete from participer where idContact = ('. $sql . ');';
  		
  		/*	echo $sql2;
  		break;*/
  		mysqli_query($conn, $sql2) or die ('Requete SQL insert invalide');
  		
  }
  public static function SupprimerContact($idClient)
  {
  		$conn = AbiDAO:: ConnectAbi();
  		//requete pour supprimer un contact
  		$sql =  'delete from contact where idClient = ' . (int)$idClient .';';
  		
  		/*  	echo $sql;
  		break;*/
  	  	mysqli_query($conn, $sql) or die ('Requete SQL insert invalide!');
  	
  }
  public static function SupprimerClient($idClient)
  {
  		//connecter a base de donnees
  		$conn = AbiDAO:: ConnectAbi();
  		//requete pour supprimer un client
  		$sql =  'delete from client where idClient = ' . (int)$idClient .';';
  	/*	echo $sql;
  		break;*/
  		mysqli_query($conn, $sql) or die ('Requete SQL insert invalide!!!');
  	
  }

  
 
 }
  ?>