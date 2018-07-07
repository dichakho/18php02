<?php 
	function checkCategoryName($conn, $name){
		$sqlCheckName = "SELECT * FROM categories WHERE name = '$name'";
		$checkName = mysqli_query($conn,$sqlCheckName);
		if($checkName->num_rows){
			$errorName =  "Category name exist!";
			$checkValidate = false;
			return $errorName;
		}
		return false;
	}
?>