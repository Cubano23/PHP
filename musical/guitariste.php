<?php 
class Guitariste extends Musicien{


	function __construct($nom,$age){
		$this->instrument="Guitare";
		parent::__construct($nom,$age);
	}
}

?>