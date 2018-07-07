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
            <?php if($result->num_rows > 0){?>
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                <?php while($row = $result->fetch_assoc()) {?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td>
                      <?php
                        $id = $row['id'];
                        echo " <a href='edit_category.php?idEdit=$id' class='btn btn-primary'>EDIT</a>";
                        echo "  <a href='delete_category.php?idDel=$id' class='btn btn-danger'>DELETE</a>";
                      ?>
                    </td>
                  </tr>
                <?php }?>
              </table>
              <?php }?>
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