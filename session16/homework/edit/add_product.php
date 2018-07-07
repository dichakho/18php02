<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Thêm sản phẩm</h1>
	
	    
	
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload:
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <br><br>
		product_id: <input type="text" name="product_id">
		<br><br>
		categoryID : <select name="cateegories" id="">
			<option value=""></option>
		</select>
		<br><br>
		product_name: <input type="text" name="product_name"><br><br>
		price: <input type="text" name="price">
		<br><br>
		quantity: <input type="text" name="quantity">
		<br><br>
		<input type="submit" name="submit" value="Thêm">
	</form>

<?php
		
		
?>

	<?php
		if (isset($_POST['submit'])) {

			//upload file anh
			$target_dir = "./imgs/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			var_dump(basename($_FILES["fileToUpload"]["name"]));
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}




			//upload file anh

			$image = $_FILES["fileToUpload"]["name"];
			$product_id = $_POST['product_id'];
			$categoryID = $_POST['categoryID'];
			$product_name = $_POST['product_name'];
			$price = $_POST['price'];
			$quantity = $_POST['quantity'];
			$conn = new mysqli('localhost', 'root', '', 'demo');

			if (! $conn) {
				die ( 'Connection failed: ' . $conn->error () );
			}
			$sql = "INSERT INTO product (image,product_id, categoryID, product_name, price,quantity) VALUES ('$image','$product_id', '$categoryID', '$product_name', '$price', '$quantity')";
			$result = $conn->query ( $sql );

		}
		
	?>

</body>
</html>