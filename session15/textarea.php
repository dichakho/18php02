<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="GET">
		<textarea name="text_input" id="" cols="30" rows="10"></textarea>
		<button>Submit</button>
	</form>

	<?php
		$data = isset($_GET["text_input"]) ? $_GET["text_input"] : "";
		if (!is_dir("file")) {
			mkdir("file");
		}
		if (file_exists("file/demo.txt")) {
			$fp = @fopen("file/demo.txt", "w");
			if ($fp) {
				fwrite($fp, $data);
				fclose($fp);
			}
		}
		$fp = @fopen("file/demo.txt", "r");
		if (!$fp) {
			echo "mo file khong thanh cong";
		} else {
			echo fread($fp, filesize("file/demo.txt"));
			echo "</br>";
			fclose($fp);
		}
		$content = file_get_contents("file/demo.txt");
		$pattern1 = "/([A-Z]|Ă|Â|Đ|Ê|Ô|Ơ|Ư)+/";
		$pattern2 = "/\d+/";
		preg_match_all($pattern1, $content, $matches1);
		preg_match_all($pattern2, $content, $matches2);
		echo "co ".count($matches1[0])." tu viet hoa";
		echo "</br>";
		echo "co ".sizeof($matches2[0])." chu so";
		echo "</br>";
		$array = explode(".", $content);
		for ($i = 1; $i < (count($array) + 1); $i++) {
			$filename = "file/demo$i.txt";
			$ft = @fopen($filename, "w");
			if (file_exists($filename)) {
				$string = $array[$i-1];
				fwrite($ft, trim($string));
				fclose($ft);
			} else {
				echo "error $i";
			}
		}
?>
</body>
</html>

