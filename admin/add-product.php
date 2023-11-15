
<?php 
include('../middleware/adminMiddleware.php');

include('includes/header.php');

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="mb-0">Select Category</label>
                                        <select name="category_id" class="form-select mb-2" >
                                                <option selected>Select Category</option>

                                                <?php  $categories = getAll("categories"); 
                                                if(mysqli_num_rows($categories) > 0){
                                                foreach($categories as $item){ ?>
                                                <option value="<?= $item['id'] ?>"><?= $item['name']; ?></option>

                                                <?php     } }
                                                else 
                                                {
                                                    echo "No category Available";
                                                }
                                                ?>
                                                
                                        </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0">Name</label>
                                    <input type="text" name="name"  class="form-control mb-2" placeholder="Enter category name">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-0">Slug</label>
                                    <input type="text"  name="slug" class="form-control mb-2" placeholder="Enter Slug">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0"> Small Description</label>
                                    <textarea name="small_description" id="" placeholder="Enter small description" rows="3" class="form-control mb-2"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Description</label>
                                    <textarea name="description" id="" placeholder="Enter description" rows="3" class="form-control mb-2"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0">Original Price</label>
                                    <input type="text" name="original_price"  class="form-control mb-2" placeholder="Enter original price">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-0">Selling Price</label>
                                    <input type="text"  name="selling_price" class="form-control mb-2" placeholder="Enter Selling price">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Upload Image</label>
                                    <input type="file" name="image" id="" class="form-control mb-2">
                                </div>

                                <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-0">Quantity</label>
                                            <input type="number"  name="qty" class="form-control mb-2" placeholder="Enter Quantity">
                                        </div>

                                        <div class="col-md-3">
                                            <label class="mb-0">Hide</label>  <br>
                                            <input type="checkbox" name="status" id="" >
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0">Trending</label> <br>
                                            <input type="checkbox" name="trending" id="" >
                                        </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control mb-2">
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Meta description</label>
                                    <textarea name="meta_description" id=""  rows="3" class="form-control mb-2"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Meta Keyword</label>
                                    <textarea name="meta_keyword" id=""  rows="3" class="form-control mb-2"></textarea>
                                </div>
                                
                                <div class="col-md-12">
                                    <button class="btn btn-info" name="add_product_btn" type="submit">Add Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>