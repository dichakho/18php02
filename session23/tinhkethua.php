<?php
//tính kế thừa
	class animal{
		var $foot = '';
		var $eyes = 2;
	}
	function run(){
		return "running";
	}
	function eat(){
		return "eating";
	}

	class dog extends animal{
		var $foot = 4;
		function run(){
			return parent::run();
		}
		function eat(){
			return "eat left-over";
		}
	}
		$dog = new dog();
		echo $dog->foot;
		echo "<br>";
		echo $dog->eyes;
		echo "<br>";
		echo run();
		echo "<br>";
		echo $dog->eat();
?>