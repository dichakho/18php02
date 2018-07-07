
<?php require 'common/header.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php require 'common/section_top.php';?>    
    <!-- Main content -->
    <section class="content">

        <div class="my-2" id="insert-area">
            
            <style type="text/css">.error {color:red;}</style>
<?php
  include 'connectdb.php';
  include 'functions.php';
  $errorName = '';
  $checkValidate = true;
  if(isset($_POST['add_category'])){
    // echo "da nhan submit de tao danh muc san pham";
    $name = $_POST['name'];
    if($name == ''){
      $errorName =  "Please input category name!";
      $checkValidate = false;
    }else{
       $errorName= checkCategoryName($conn, $name);
       $checkValidate = $errorName?false:true;
    }
    if($checkValidate){
      $sql = "INSERT INTO categories(name) VALUES('$name')";
      mysqli_query($conn,$sql);
      //chuyen trang bang php
      // header("Location: list_category.php");
    }
  }
?>
<h1>Add new category</h1>
<form action="" method="post">
  <p>Name:<input type="text" name="name"></p>
  <span class="error"><?php echo $errorName;?></span>
  <p><input type="submit" name="add_category" value="Add" class="btn btn-success"></p>
</form>
        </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require 'common/footer.php';?>

