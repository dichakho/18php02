<?php require 'common/header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
  <?php require 'common/section_top.php';?>
  <?php 
  include 'connectdb.php';
  $sql = "SELECT * FROM categories";
  $result = mysqli_query($conn,$sql);
  ?>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
            <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title" style="font-weight: 900">List category</h1>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <?php
                include 'connectdb.php';
                $id = $_GET['idCart'];
                $sqlGetCart = "SELECT * FROM products WHERE id = $id";
                $result = mysqli_query($conn,$sqlGetCart);
                while($row = $result->fetch_assoc()){
                  echo $row['name']; 
                  echo $row['price'];
                }
            ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require 'common/footer.php';?>