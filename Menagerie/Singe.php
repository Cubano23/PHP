<?php

class Singe extends Animal{
	function __construct($name, $age){
		$this->species = "Singe";
		parent::__construct($name,$age);
	}
}