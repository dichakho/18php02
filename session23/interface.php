<?php
//Interface: ko phải là 1 lớp, đc mô tả như 1 bản thiết kế cho các class có cùng chung cách thức hoạt động
//vì ko phải là 1 lớp nen ko đc đn các th tính, khởi tạo thể hiện. Còn các ph thức đc đn sẽ ko đc viết code trong body của hàm
//ko có kn phạm vi của ph thức, tất cả đều là public
//các lớp con khi kế thừa phải đn lại hết all ph thức trong interface
//một lớp có thể kế thừa nhiều interface

interface animal{
	function run();
	function eat();
	function sleep();
	

}
class dog implements animal{
	public function eat(){

	}
	public function eat(){
		
	}
	public function eat(){
		
	}
}

//abstract
//giống như 1 bản thiết kế class cha cho class con
//mô tả thêm các thuộc tính ph thức hoạt động
//interface
//đơn thuần chỉ là 1 bản thiết kế về cách thức hoạt động của lớp cha
?>