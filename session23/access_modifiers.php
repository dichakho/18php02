
<?php
//các mức độ truy cập access midifiers
// private: Đây là thành phần chỉ dành riêng cho nội bộ của lớp, nghĩa là ta không thể truy xuất tới thành phần private ở lớp con hoặc ở bên ngoài lớp thường được dùng để 
// Các thuộc tính dữ liệu nhằm bảo vệ chúng, tránh sự truy cập tự do từ bên ngoài. Các thuộc tính này sẽ có những hàm SET và GET gán và lấy dữ liệu.
//Các phương thức trung gian tính toán trong nội bộ của đối tượng mà ta k muốn bên ngoài có thể can thiệp vào.


// protected: chỉ cho phép truy xuất nội bộ trong lớp đó và lớp kế thừa, riêng ở bên ngoài lớp sẽ không truy xuất đc. Mức protected thường được dùng cho những phương thức và thuộc tính có khả năng bị lớp con định nghĩa lại


//public: Đây là mức truy cập thoáng nhất bởi vì bạn có thể truy cập tới các phương thức và thuộc tính ở bất cứ đâu, dù trong nộ bộ của lớp hay ở lớp con hay cả bên ngoài lớp đều được
	class animal{
		public $variable_pub;
		protected $_variable_pro;
		private $__variable_pri;
		public function a(){
			$this->__variable_pri = 20;
			return $this->__variable_pri;
		}
		protected function b(){

		}
	}
	class dog extends animal{
		public function test(){
			$this->variable_pub = 10;
			return $this->variable_pub;
			//$this thay cho dog
			//$this->$variable_pri; sai
		}
	}
	$a = new animal();
	$a->variable_pub;
	$b = new dog();
	echo $b->a();
	echo "<br>";
	echo $b->test();
?>
<?php
	class database{
		protected $result = [];
		function getResult(){
			return $this->result;
		}
		protected function setResult($result){
			$this->result = $result;
		} 
		public function query(){
			$this->setResult([1,2,3]);
			return $this->result;
		}
	}
	$a = new database;
	$a->query();
	var_dump($a->query());
	$a->getResult();
	echo "<br>";
	var_dump($a->getResult());
?>