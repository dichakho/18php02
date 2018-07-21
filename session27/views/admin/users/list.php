<?php 
include 'views/admin/common/header.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List users</h1>
            <p><a href="admin.php?controller=users&action=add">Add new user</a></p>
			<?php
				$conn = new ConnectDB();
				$sql = "SELECT id, role, username, password FROM users";
				$result = mysqli_query($conn->connect(),$sql);
				?>
				<?php if($result->num_rows > 0){?>
				<?php $i = 1;?>
				<table class="table table-hover">
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Action</th>
	                </tr>
					<?php
						while($row = $result->fetch_assoc()) {
						$id = $row['id'];
					?>
						<tr>
							<td>
								<?php 
									echo  $i;
								?>
							</td>
							<td>
								<?php
									echo $row['username'];
								?>
							</td>
							<td>
								<?php
									echo " <a href='edit_product.php?idEdit=$id' class='btn btn-primary'>EDIT</a>";
								echo " <a href='delete_product.php?idDel=$id' class='btn btn-danger'>DELETE</a>";
							echo "<br>";
								?>
							</td>
						</tr>
						
					<?php
						$i++;
					 	}
					?>
					</table>
				<?php
					}else{
					echo "No user";
				}
				?> 
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/admin/common/footer.php';?>
