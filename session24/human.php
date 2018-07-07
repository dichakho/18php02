<?php
	class Human{
		var $name = 'Khoi';
		var $age = 19;
		var $birthday = 1999;
		var $phone = "0981234899";
		function Register(){

		}
		function ShowInfo(){
			echo "Your name: ".$this->name;
			echo "<br>";
			echo "Your age: ".$this->age;
			echo "<br>";
			echo "Your birthday: ".$this->birthday;
			echo "<br>";	
			echo "Your phone: ".$this->phone;
		}
		function eat(){
			echo "Ăn";
		}
		function work(){
			echo "Working";
		}
		private function getIDnumber(){
			return "215491234";
		}

	}
	$human = new Human();
	$human->ShowInfo();
	echo "<br>";
	$human->eat();
	echo "<br>";
	$human->work();
	echo "<br>";

	class Student extends Human{
		function study(){
			echo "Do homework";
		}
		function eat(){
			echo "Ăn cơm";
		}


	}
	$student = new Student();
	$student->eat();
	echo "<br>";
	$student->study();
	$student->ShowInfo();
?>