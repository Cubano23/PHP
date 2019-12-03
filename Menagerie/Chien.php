<?php

class Chien extends Animal{
	function __construct($name, $age){
		$this->species = "Chien";
		parent::__construct($name,$age);
	}
}