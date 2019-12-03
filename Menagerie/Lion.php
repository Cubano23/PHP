<?php

class Lion extends Animal{
	function __construct($name, $age){
		$this->species = "Lion";
		parent::__construct($name,$age);
	}
}