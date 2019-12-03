<?php

abstract class Animal{
	public $name;
	public $age;
	public $mood;
	public $species;
	public $cry;

	function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
		$this->mood = "Happy";
	}

	public function cry(){
		echo $cry."<br>";
	}
}

?>