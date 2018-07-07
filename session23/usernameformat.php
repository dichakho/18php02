<?php 
$partten = "/^[A-Za-z0-9_\.]{6,32}$/";
$subject = "";
if(!preg_match($partten ,$subject, $matchs)){
	 echo  "Username bạn vừa nhập không đúng định dạng ";
	}else{
		echo "Đăng ký thành công";
	}
?>