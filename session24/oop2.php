<?php
//khai bao mot doi tuong
	class Users{
		//thuoc tinh cua doi tuong
		var $name;
		private $old = 19;
		//phuong thuc cua doi tuong
		function getName(){
			echo "My name is Khoi";
		}
		//phuong thuc cua doi tuong
		public function getOld(){
			return $this->old;
		}
		function checkGetOldPrivate(){
			return $this->old;
		}
	}
	//khoi tao doi tuong
	$user = new Users();
	//goi phuong thuc getName cua doi tuong Users
	$user->getName();
	echo "<br>";
	echo $user->getOld();
	echo "<br>";
	echo $user->checkGetOldPrivate();
	//ke thua trong huong doi tuong
	class Students extends Users{
		//da hinh trong huong doi tuong
		function getOld(){
			echo "20";
		}
		function checkGetOldPrivate(){
			return $this->old;
		}
	}
	//khoi tao doi tuong student
	$student = new Students();
	echo "<br>";
	$student->getName();	
	echo "<br>";
	echo $student->getOld();
	// echo $student->checkGetOldPrivate();
?>