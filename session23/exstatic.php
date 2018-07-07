<?php
	// Lớp động vật
	class Animal1 
	{
	    protected $_name = 'Chưa có tên';
	     
	    function setName($name){
	        $this->_name = $name;
	    }
	     
	    function getName(){
	        return $this->_name;
	    }
	}
	 
	// Phần 1: Con Vịt
	$dog = new Animal1();
	$dog->setName('Con Chó');
	echo $dog->getName(); 
	// Kết quả: Con Chó
	 
	// Phần 2: Con Mèo
	$cat = new Animal1();
	echo $cat->getName();
	// Kết quả: Chưa có tên
	echo "<br>";
?>





<?php
	// Lớp động vật
	class Animal2 
	{
	    protected static $_name = 'Chưa có tên';
	     
	    public static function setName($name){
	        Animal2::$_name = $name;
	    }
	     
	    public static function getName(){
	        return Animal2::$_name; 
	        //:: thay thế cho $this bởi vì các thuộc tính và phương thức tĩnh ở dạng toàn cục, được gọi mà không cần khởi tạo nên nếu bạn dùng từ khóa $this để gọi đến một hàm nào đó trong chính lớp đó thì sẽ bị báo sai
	    }
	}
	 
	// Phần 1: Con Vịt
	$dog = new Animal2();
	$dog->setName('Con Chó');
	echo $dog->getName(); 
	// Kết quả: Con Chó
	 
	// Phần 2: Con Mèo
	$cat = new Animal2();
	echo $cat->getName();
	// Kết quả: Con Chó
?>