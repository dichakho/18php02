<?php
	class A{
		public $name = "";
		public function __construct($name = ""){
			$this->name = $name;
		}
		public function __destruct(){
			echo "da vao ham nay roi";
		}
	}
	$a = new A("khoi");
	echo $a->name;
	echo "<br>";

	// class database{
	// 	function connect();
	// 	function disconnect();
	// 	public function __destruct(){
	// 		$this->disconnect();
	// 	}
	// }
?>