<?php session_start(); ?>
	<h1>Login form</h1>
	<form action="" method="post">
		<p>Username:<input type="text" name="username"></p>
		<p>Password:<input type="password" name="password"></p>
		<p><input type="submit" name="login" value="Login"></p>
	</form>
	<?php 
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == 'dichakho' && $password == '123456'){
			$_SESSION['username'] = $username;
			header("Location: login_success.php");
		}
	}
?>