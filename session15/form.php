<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="post">
		<textarea name="content" id="" cols="50" rows="15" >
			<?php
				if (isset($_POST["content"])) {
					echo $_POST["content"];			
				}
				//nếu nội dung nhập rồi thì hiển thị ra nội dung
			?> 
		</textarea>
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
		if (isset($_POST["submit"])) {
			if (isset($_POST["content"])) {
				$content = $_POST["content"];
				$file = fopen("demo.txt", "w");
				fwrite($file, $content);
				echo "Submit thành công";
				fclose($file);
				$file = fopen("demo.txt", "r");
				echo "<br>"."Nội dung của file là: "."<br>";
				while (!feof($file)) {
					$content = fgets($file);
					echo "$content"."<br>";
					$content = file_get_contents("demo.txt");
		
				}
				$separate = explode(".", $content);
		//tách chuỗi thành mảng
		echo "Đoạn văn sau khi cắt:";
		foreach ($separate as $key => $value) {
		//foreach là vòng lặp dùng cho mảng
			
			echo $value."<br>";
			$sentences = $value;
			file_put_contents("demo1.txt", $sentences."_____", FILE_APPEND);
		}

				fclose($file);
			}
		}
		else{
			echo "Hãy nhập nội dung";
		}

		


		


	?>
</body>
</html>