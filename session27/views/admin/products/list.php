<?php include 'views/admin/common/header.php';?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List products</h1>
            <p><a href="admin.php?controller=users&action=add">Add new products</a></p>
			<?php
				$conn = new ConnectDB();
				$sql = "SELECT products.id, products.name, categories.name as categoryName, price, image,description  FROM products INNER JOIN categories ON products.category_id = categories.id";
				// $sql = "SELECT * FROM products";
				$result = mysqli_query($conn->connect(),$sql);
				?>
				<?php if($result->num_rows > 0){?>
				<?php $i = 1;?>
				<table class="table table-hover">
	                <tr>
	                  <th>ID</th>
	                  <th>Image</th>
	                  <th>Name</th>
	                  <th>Category</th>
	                  <th>Description</th>
	                  <th>Price</th>
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
									echo "<img src='/session27/public/admin/imgs/".$row['image']."'>";
								?>
							</td>
							<td>
								<?php
									echo $row['name'];
								?>
							</td>
							<td>
								<?php
									echo $row['categoryName'];
								?>
							</td>
							<td>
								<?php
									echo $row['description'];
								?>
							</td>
							<td>
								<?php
									echo $row['price'];
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
					echo "No product";
				}
				?> 
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/admin/common/footer.php';?>
