<?php 
	function getCurrentDay() {
		$today = date('Y-m-d h:i:s a');

		$explod = explode(" ", $today);//tach chuoi 
		var_dump($explod);	
		echo "<br>";
		if($explod[2] == "pm")
		{
			$newHours = (int) substr($explod[1], 0,2) + 12;
			$rest = substr($explod[1], 2);
			$explod[1] = $newHours . $rest ;
		}
		$today = $explod[0] . " " .$explod[1];
		return $today;

	}
	echo getCurrentDay();
 ?>