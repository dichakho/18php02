<?php
	$hello='Hello World';
	define('TELENUM', '0981234899');
	echo $hello.'<br>';
 	echo TELENUM.'<br>';
 	$a='123';
 	$b=123;
 	$c=$a+$b;
 	echo $c.'<br>';
 	var_dump(is_int($c));
 	echo '<br>';
 	var_dump(is_int($a));
 	echo '<br>';
 	$x='a123';
 	$x=(int)$x;
 	echo $x.'<br>';
 	
 	$n=12;
 	$m=$n%2;
 	if ($m==0) {
 		echo 'Số '.$n.' là số chẵn';
 	}
 	else{
 		echo "Số ".$n. 'không là số chẵn';
 	}

 	echo "<br>";

 	$y=2018;
 	if ($y%4==0 && $y%100!=0 || $y%400==0) {
 		echo "Năm ".$y.' là năm nhuận';
 	}
 	else{
 		echo "Năm ".$y.' không là năm nhuận';
 	}

 	echo "<br>";

 	$t = date("H");

	if ($t < "20") {
	    echo "Have a good day!";
	} else {
	    echo "Have a good night!";
	}

	echo "<br>";

	$d=2;
	switch ($d) {
		case 2:
			echo "Monday";
			break;
		case 3:
			echo "Tuesday";
			break;
		case 4:
			echo "Wednesday";
			break;
		case 5:
			echo "Thursday";
			break;
		case 6:
			echo "Friday";
			break;
		case 7:
			echo "Saturday";
			break;
		case 8:
			echo "Sunday";
			break;						
		
		default:
			echo "Wrong day";
			break;
	}

	echo "<br>";

	$x = 1; 

	while($x <= 10) {
    	echo "The number is: $x <br>";
    	$x++;
	} 
	echo "<br>";
	for ($i=0; $i < 10; $i++) { 
		echo "The number is: $i <br>";
	}
	$sv= array(
		'Nguyễn A',
		'Nguyễn 1',
		'Nguyễn X',
		'Nguyễn 2',
		'Nguyễn B',
		'Nguyễn 3',
	);
	for ($i=0; $i < 6; $i++) { 
		echo $sv[$i].'<br>';
	}
	echo "<br>";
	$count=count($sv);
	for ($i=0; $i < $count ; $i++) { 
		echo $sv[$i].'<br>';
	}
	
?>