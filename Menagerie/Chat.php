<?php

class Chat extends Animal{
	function __construct($name, $age){
		$this->species = "Chat";
		parent::__construct($name,$age);
	}
}