<?php 
require_once './config/database.php';
class UserModel extends ConnectDB{
	function addUser($username, $password, $role){
		$sql = "INSERT INTO users(role, username, password) VALUES ('$role', 
		'$username', '$password')";
		return mysqli_query($this->conn,$sql);
	}
	function addCategory($name){
		$conn = new ConnectDB();
		$sql = "INSERT INTO categories(name) VALUES('$name')";
		if (mysqli_query($conn->connect(),$sql)) {
			echo "Add success";
		}else{
			echo "Add fail";
		}
	}
	function addProduct($name,$category_id,$description,$image,$price){
		$conn = new ConnectDB();
		$sql = "INSERT INTO products(category_id, name, description, image, price) VALUES($category_id, '$name','$description','$image','$price')";
		// var_dump($sql);
		// exit();
		
		if (mysqli_query($conn->connect(),$sql)) {
			echo "Add success";
		}else{
			echo "Add fail";
		}
	}
	function deleteCategory($id){
		$conn = new ConnectDB();
		$sql = "DELETE FROM categories WHERE id = $id";
		if (mysqli_query($conn->connect(),$sql)) {
			return 'Delete success';
		}else{
			return "Delete fail";
		}
	}
	function login($username, $pwd){
			session_start();
			$conn = new ConnectDB();
			$sql = "SELECT *FROM users WHERE username = '$username' and password ='$pwd'";
			$result = mysqli_query($conn->connect(), $sql);
			$check = $result->num_rows;
			if ($check > 0) {
				$userInfo = array();
				while($row = $result->fetch_assoc()) {
					$userInfo['username'] = $row['username'];
					$userInfo['role'] = $row['role'];	
				}
				$_SESSION['userInfo'] = $userInfo;
				if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] == 1){
					header("Location: admin.php");
				}else{
					echo "Bạn không có quyền đăng nhập vào trang này";
				}
			}else{
				echo "Wrong username or password";
			}
	}
	function logout(){
		session_start();
		session_destroy();
		header("Location: admin.php?controller=users&action=login");
	}
	function register(){
		$conn = new ConnectDB();
		if (isset($_POST["submit"])) {
		 	$username = $_POST["username"];
		 	$pwd = $_POST["pwd"];
		 	if ($username == "" || $pwd == "") {
		 		echo "Vui lòng nhập đầy đủ thông tin";
		 	}else{
		 		$check = "SELECT *FROM users WHERE username = '$username' ";
		 		$result = mysqli_query($conn->connect(), $check);
		 		if ($result->num_rows > 0) {
		 			echo "Tài khoản này đã tồn tại. Vui lòng nhập tên khác";
		 			die();
		 		}else{
		 			$sql = "INSERT INTO users (username, password) VALUES ('$username', '$pwd')";
		 			if (mysqli_query($conn->connect(), $sql)) {
		 	        echo "Đăng ký thành công";
		 	        echo "<br>";
		 	        echo "<a href='admin.php?controller=users&action=login'>Log In</a>";
		 		    } else {
				        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		 		    }
		 		}
				
		 	}
		 	
		 }
	}
		
}
	
	

