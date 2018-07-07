<h1>Home page</h1>
<?php 
include 'config/connectdb.php';
$sqlCategory = "SELECT * FROM categories";
$resultCategory = mysqli_query($conn,$sqlCategory);

while($row = $resultCategory->fetch_assoc()) {
	$id   = $row['id'];
	$name = $row['name'];
	echo " <a href='homepage.php?category_id=$id'>$name</a>";
	echo " | ";
}
echo " <a href='homepage.php?category_id=all'>All</a>";
if(!isset($_GET['category_id']) || $_GET['category_id'] == 'all'){
	$sqlProduct = "SELECT * FROM products";
}else{
	$idCat = $_GET['category_id'];
	$sqlProduct = "SELECT * FROM products WHERE category_id = $idCat";
}
$resultProduct = mysqli_query($conn,$sqlProduct);
echo "<br>";
while($row = $resultProduct->fetch_assoc()) {
	$id   = $row['id'];
	$name = $row['name'];
	$image = 'images/'.$row['image'];
	echo  $id.' - '. $row['name'];
	echo "<img src='$image' width='100'>";
	echo "<br>";

}
?>