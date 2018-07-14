<?php 
include './config/configDB.php';
class UserModel{
	function register($email){
		//xu ly luu du lieu vao database
		$conn = new ConnectDB();
		$sql = "INSERT INTO users (email) VALUES ('$email')";
		
		if (mysqli_query($conn->connectDB(),$sql)) {
			echo "register success";

		}else{
			echo "register fail";
		}
	}
	function contact($email, $phone){
		$conn = new ConnectDB();
		$sql = "INSERT INTO contact (email, phone) VALUES ('$email', '$phone')";
		if (mysqli_query($conn->connectDB(),$sql)) {
			echo "submit success";

		}else{
			echo "submit fail";
		}
	}
	function addCategory($name){
		$conn = new ConnectDB();
		$sql = "INSERT INTO categories(name) VALUES('$name')";
		if (mysqli_query($conn->connectDB(),$sql)) {
			echo "Add success";
		}else{
			echo "Add fail";
		}
	}
	function addProduct($name,$category_id,$description,$image,$price,$published,$created,$updated){
		$conn = new ConnectDB();
		$sql = "INSERT INTO products(name,category_id, description, image, price, published, created, updated) VALUES('$name',$category_id,'$description','$image','$price','$published','$created','$updated')";
		
		if (mysqli_query($conn->connectDB(),$sql)) {
			echo "Add success";
		}else{
			echo "Add fail";
		}
	}
}
?>