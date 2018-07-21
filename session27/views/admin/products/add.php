<?php include 'views/admin/common/header.php';?>
<?php
    function cateToPro(){
        $conn = new ConnectDB();
        
        $sqlListCategory = "SELECT * FROM categories";
        $listCategory =  mysqli_query($conn->connect(),$sqlListCategory);
        $listCategoryOption = '';
        while($row = $listCategory->fetch_assoc()) {
            $id   = $row['id'];
            $name = $row['name'];
            $listCategoryOption.= "<option value='$id'>$name</option>";
            
        }
        
        
        echo $listCategoryOption;
    }
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add product</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="admin.php?controller=products&action=add" role="form" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category_id" class="form-control">
                                                <?php cateToPro();?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea rows="10" cols="93" name='description'
                                            class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success" name="add_product">Add product</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>
</div>
<!-- /#page-wrapper -->
<?php include 'views/admin/common/footer.php';?>



