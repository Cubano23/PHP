<?php 
class Bassiste extends Musicien{


	function __construct($nom,$age){
		$this->instrument="Bassiste";
		parent::__construct($nom,$age);
	}
}

?>