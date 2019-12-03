<?php 
class Chanteur extends Musicien{


	function __construct($nom,$age){
		$this->instrument="Chanteur";
		parent::__construct($nom,$age);
	}
}

?>