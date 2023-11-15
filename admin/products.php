<?php 
include('../middleware/adminMiddleware.php');

include('includes/header.php');

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Products</h4>
                    </div>
                    <div class="card-body" id="products_table">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Visibility</th>
                                    
                                    <th>Created Date</h>
                                    <th>Actions</th>
                                    


                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $products = getAll("products");
                                   if(mysqli_num_rows($products) > 0) { 
                                    foreach($products as $item) { ?>
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <?php 
                                            $category_id = $item['category_id'];
                                            $category_name = getById("categories", $category_id);
                                            $category_data = mysqli_fetch_array($category_name);
                                            ?>
                                            <td><?= $category_data['name']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td>
                                                <img src="../uploads/<?= $item['image'] ?>" alt="<?= $item['name']; ?>" srcset="" width="50px" height="50px">
                                            </td>
                                            <td><?= $item['status'] == '0'? "Visible":"Hidden"; ?></td>
                                            
                                            <td><?= $item['created_at'];  ?></td>

                                            <td>
                                                <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-info ">Edit</a>
                                              
                                           
                                            
                                                
                                                <button class="btn btn-danger  delete_product_btn" type="submit" value="<?= $item['id']; ?>" name="delete_product_btn">Delete</button>
                                                
                                            </td>

                                        </tr>
                                <?php  } }
                                   else
                                   {
                                    echo "No record found";
                                   }
                                ?>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>