<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<meta name="description" content="Mo ta website..">
	<meta name="keywords" content="tukhoa1,tukhoa2...">
	<link rel="Shortcut icon" href="favicon.ico">
	<!-- css -->
	<link rel="stylesheet" href="vendor/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/fonts/Roboto.css">
	<!-- myCss -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	

	<div class="container">
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Nhập Tên File :</label>
				<input type="text" name="nameFile" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="">Nội dung :</label>
				<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-danger">Gửi Dữ Liệu </button>
		</form>
		<br>
		<br>


		<?php 
		if (isset($_POST['content'] ) && isset($_POST['nameFile'] )) {
				// lấy dữ liệu từ trường tên file
			$nameFile = $_POST['nameFile'];
				// lấy dữ liệu từ trường nội dung
			$content = $_POST['content'];
				// Đường dẫn để lưu file
			$path = "filetxt/".$nameFile.".txt";
				// tạo file txt
			$createTxt = fopen($path, "w");
				// Lưu text
			fwrite($createTxt,$content);
		}
		?>
		<h3>ĐỌC FILE TXT 1</h3>
		<?php 
			$nameFile = "demo1";
			// Đường dẫn để lưu file
			$path = "filetxt/".$nameFile.".txt";
			// Đọc nội dung của file 
			$readTxt = file_get_contents($path, "r");
				echo $readTxt;
		?>
		<h3>ĐỌC FILE TXT 2</h3>
		<?php 
			$nameFile = "demo";
			// Đường dẫn để lưu file
			$path = "filetxt/".$nameFile.".txt";
			// Đọc nội dung của file 
			$readTxt = file_get_contents($path, "r");
				echo $readTxt;
			// 3.3 Tách đoạn văn trên ra các đoạn văn khác nhau, phân biệt bởi dấu chấm
			$strReplace = explode(".", $readTxt);
			// echo "<pre>";
			// var_dump($strReplace);
			// echo "</pre>";
			echo "<h3>Đoạn văn</h3><br>";
			foreach ($strReplace as $key => $value) {
				// Hiện thị ra view
				echo "Đoạn".($key+1)." - ".$value."<br>";
				//
				$repText = "Đoạn".($key+1)." - ".$value."<br>";
				 //$strReplace[0];
			
			// lưu text tách vào file mới
				$nameFile = "tach";
						// Đường dẫn để lưu file
				$path = "filetxt/".$nameFile.".txt";
						// tạo file txt
				$createTxt = fopen($path, "a");
					// Lưu text
				fwrite($createTxt,$repText);	
				
			}
			
				
			
		?>
		
		
	</div>
	
	





	<!-- js -->
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>