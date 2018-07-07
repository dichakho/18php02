<?php
//khai bao mot doi tuong
	class Users{
		//thuoc tinh cua doi tuong
		var $name;
		var $old = 19;
		//phuong thuc cua doi tuong
		function getName(){
			echo "My name is Khoi";
		}
		//phuong thuc cua doi tuong
		function getOld(){
			return $this->old;
		}
	}
	//khoi tao doi tuong
	$user = new Users();
	//goi phuong thuc getName cua doi tuong Users
	$user->getName();
	echo "<br>";
	echo $user->getOld();
	//ke thua trong huong doi tuong
	class Students extends Users{
		//da hinh trong huong doi tuong
		function getOld(){
			echo "20";
		}
	}
	//khoi tao doi tuong student
	$student = new Students();
	echo "<br>";
	$student->getName();	
	echo "<br>";
	echo $student->getOld();
?>