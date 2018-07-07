<?php
	class Animals{
		var $foot;
		var $head;
		function run($param = null){
			return true;
		}
		function eat($param = null){

		}
	}
	$animal = new Animals();
	$animal->foot = 10;
	echo $animal->foot;
	$animal->run(); 
?>