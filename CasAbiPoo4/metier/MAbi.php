<?php // ********** code PHP objet en couches *************** 
// classe Metier client
class MClient { 
  // attributs 
  private $nomClient; 
  private $typeClient; 
  private $telClient; 
  private $emailClient; 
  private $nature; 
  private $chiffreAffaire; 
  private $raisonSociale;
  private $ville;
  private $activite; 
   
  // constructeur 
  public function __construct(){} // meme pas nécessaire… 
   
  // getters 
  public function getNomClient(){ 
   return $this->nomClient; 
  } 
 
  public function getTypeClient(){ 
   return $this->typeClient; 
  } 
   
  public function getTelClient(){ 
   return $this->telClient; 
  } 
   
  public function getEmailClient(){ 
   return $this->emailClient; 
  }   
   
  public function getNature(){ 
   return $this->nature; 
  }  
 
  public function getChiffreAffaire(){ 
   return $this->chiffreAffaire; 
     } 
 
  public function getRaisonSociale(){ 
   return $this->raisonSociale; 
  } 
   public function getVille(){ 
   return $this->ville; 
  }
   public function getActivite(){ 
   return $this->activite; 
  } 
 
   
  // setters 
  public function setNomClient($value){ 
   $this->nomClient = $value; 
  } 
  // titre converti en MAJ 
  public function setTypeClient($value){ 
    $this->typeClient = $value; 
  } 
   
  public function setTelClient($value){ 
    $this->telClient = $value; 
  } 
   
  public function setEmailClient($value){ 
    $this->emailClient = $value; 
  }  
 
  public function setNature($value){ 
    $this->nature =  $value; 
  }  
   
  // capitale forcee au debut du resume 
  public function setChiffreAffaire($value){ 
    $this->chiffreAffaire = $value; 
  } 
 
  public function setRaisonSociale($value){ 
    $this->raisonSociale = $value; 
  }
    public function setVille($value){ 
    $this->ville = $value; 
  }
    public function setActivite($value){ 
    $this->activite = $value; 
  }   
 
  
   
} 
?> 