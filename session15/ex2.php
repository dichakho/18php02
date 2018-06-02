<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	function dem($name){
		$count = mb_strlen($name);
		for ($i=0; $i < mb_strlen($name); $i++) { 
			if ($i == ' ') {
				$count--;
			}
		}
		return $count;
	}
	function timkiem($name){
		for ($i=0; $i <strlen($name) ; $i++) { 
			if ($name[$i] == 'n') {
				echo $i;
			}
		}
		
	}
		$name="Diệp Chấn Khôi";
		echo mb_strlen($name);
		echo $name.'<br>';
		echo "Số kí tự trong tên: " .dem($name);
		echo '<br>';
		echo "Số từ trong tên: ".str_word_count($name);
		echo '<br>';
		echo "Vị trí của n trong tên: " .timkiem($name);
		echo '<br>';
		echo mb_strtoupper($name);
		echo '<br>';
		echo str_replace("Khôi", "PHP", $name);

	?>	
</body>
</html>