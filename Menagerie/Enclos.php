<?php 

class Enclos{
	public $name;
	public $animalList = [];
	public $temperature;
	public $maxPlaces;
	public $type;
	function __construct($name, $maxPlaces, $type){
		$this->temperature = 26;
		$this->name = $name;
		$this->maxPlaces = $maxPlaces;
		$this->type = $type;
	}

	function addAnimal($animal){
		if (count($this->animalList) < $this->maxPlaces){
			if ($animal->species == $this->type){
				array_push($this->animalList, $animal);
			}else{
				echo "Ce n'est pas la même espèce !";
			}
		}
		else{
			echo "Il n'ya plus de places dans l'enclos";
		}
	}	
	function ShutdownTemperature($temperature){
		$this->temperature-=$temperature;
		if ($this->temperature < 10){
			foreach($this->animalList as $animal){
				$animal->mood = "Sick";
			}
		}
	}	
	function UpgradeTemperature(){
		$this->temperature-=$temperature;
		if ($this->temperature >= 25){
			foreach($this->animalList as $animal){
				$animal->mood("Warm and Happy");
			}
		}
	}
}


?>