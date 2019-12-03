<?php 
 class Groupe{
	
	public $nom;
	public $musiciens = [];
	public $chansons = [];


	function __construct($nom){
		
	$this->nom = $nom;

	}

	function addMusicien($musicien){

	
		if(count($this->musiciens < 6))
	    	array_push($this->musiciens, $musicien);
		else
			echo "Erreur!!!!";

	
	}

	function addChanson($chanson){

		if(count($this->chansons < 10))
  			array_push($this->chansons, $chanson);
  		else
  			echo "Erreur!!!!";
	
	
	}

	function playSong($chanson){
		// vérifie dans le tableau des chansons si la song envoyée est dans le tableau ou pas
		// si elle est dans le tableau, tu fais un echo "le groupe joue : ".$song
		// sinon tu echo "la chanson n'est pas connue par le groupe"
		if (in_array($chanson, $this->chansons))
			echo  "le groupe joue : ".$chanson;
		else{
			$this->addChanson($chanson);
			echo "Le groupe viens d'apprendre la chanson: ". $chanson. "<br><br><br>";
			



	}
		}

		function concert(){
			for($i = 0; $i < sizeof($this->chansons); $i++)				
				echo "Song: ". $this->chansons[$i]." - ";
		}

}


?>