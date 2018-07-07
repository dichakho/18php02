<?php
	//Abstract: là 1 lớp trừu tượng được xây dựng lên như một lớp cha cho các lớp con có cùng bản chất
	//vì là 1 class nên các lớp con kế thừa lớp abstract với từ khóa extends
	//có thế khai báo thuộc tính vào các phg thức bth
	//các phương thức đc ddn là abstract trong lớp abstract sẽ không đc viết code trong nó, bắt buộc các lớp con phải override lại lớp abstract để viết tiếp chức năng cho ph thức đó
	//ko đc khởi tạo 1 đ tượng cho 1 lớp abstract
	abstract class animal{
		public $foot = 4;
		abstract function run($foot);
		public function eat(){

		}
	}
	class dog extends animal{
		public function run($foot){
			echo "chay bang 4 chan";
		}
	}
	class chicken extends animal{
		public function run($foot){
			echo "chay bang 2 chan";
		}
	}
	$dog = new dog();
	$dog->run();
	// $a = new animal(); sai
?>