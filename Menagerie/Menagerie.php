<?php 
class Menagerie{
	public $enclos = [];

	function addEnclos($enclos){
		array_push($this->enclos, $enclos);
	}

	function findEnclos($name){
		foreach($this->enclos as $enclot){
			if ($enclot->name == $name){
				return $enclot;
			}
		}
	}
}