<?php 
abstract class Musicien{
	public $instrument;
	public $nom;
	public $age;

	function __construct($nom,$age){
		$this->nom = $nom;
		$this->age = $age;

	}
}


?>