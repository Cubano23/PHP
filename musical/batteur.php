<?php 
class Batteur extends Musicien{


	function __construct($nom,$age){
		$this->instrument="Batteur";
		parent::__construct($nom,$age);
	}
}

?>