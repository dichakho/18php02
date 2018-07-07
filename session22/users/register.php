<h1>Register form</h1>
<form action="" method="post">
	<p>Username:<input type="text" name="username"></p>
	<p>Password:<input type="password" name="password"></p>
	<p><input type="submit" name="register" value="Register"></p>
</form>
<?php 
include '../config/connectdb.php';
if(isset($_POST['register'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "INSERT INTO users(role, username, password) VALUES (0, '$username', '$password')";
	mysqli_query($conn,$sql);
	echo "Register success!";
}
?>