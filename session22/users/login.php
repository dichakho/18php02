<h1>Login form</h1>
<form action="" method="post">
	<p>Username:<input type="text" name="username"></p>
	<p>Password:<input type="password" name="password"></p>
	<p><input type="submit" name="login" value="Login"></p>
</form>
<?php 
session_start();
include '../config/connectdb.php';
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	if($result->num_rows > 0){
		// luu SESSION login

		$userInfo = array();
		while($row = $result->fetch_assoc()) {
			$userInfo['username'] = $row['username'];
			$userInfo['role'] = $row['role'];
		}
		$_SESSION['userInfo'] = $userInfo;
		echo "Login success!";
	}else{
		echo "Wrong username or password";
	}
	
}
?>