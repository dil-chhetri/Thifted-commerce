
<?php 
include('../middleware/adminMiddleware.php');

include('includes/header.php');

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php  
                if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = getById("products", $id);
                if(mysqli_num_rows($product) > 0){ 
                    $data = mysqli_fetch_array($product);
                    ?>
              <div class="card">
                    <div class="card-header">
                        <h4>Edit Prodcust</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                <input type="hidden" name="product_id" value="<?= $data['id']; ?>">

                                    <label class="mb-0">Select Category</label>
                                        <select name="category_id" class="form-select mb-2" >
                                                <option selected >Select Category</option>

                                                <?php  $categories = getAll("categories"); 
                                                if(mysqli_num_rows($categories) > 0){
                                                foreach($categories as $item){ ?>
                                                <option value="<?= $item['id'] ?>" <?= $data['category_id'] == $item['id'] ?'selected':'' ?>><?= $item['name']; ?></option>

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
                                    <input type="text" name="name"  value="<?= $data['name']; ?>" class="form-control mb-2" placeholder="Enter category name">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-0">Slug</label>
                                    <input type="text"  name="slug" value="<?= $data['slug']; ?>" class="form-control mb-2" placeholder="Enter Slug">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0"> Small Description</label>
                                    <textarea name="small_description" id="" placeholder="Enter small description" rows="3" class="form-control mb-2"><?= $data['small_description']; ?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Description</label>
                                    <textarea name="description" id="" placeholder="Enter description" rows="3" class="form-control mb-2"><?= $data['description']; ?></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0">Original Price</label>
                                    <input type="text" name="original_price" value="<?= $data['original_price']; ?>" class="form-control mb-2" placeholder="Enter original price">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-0">Selling Price</label>
                                    <input type="text"  name="selling_price" class="form-control mb-2" value="<?= $data['selling_price']; ?>" placeholder="Enter Selling price">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Upload Image</label>
                                    <input type="file" name="image" id="" class="form-control mb-2">
                                    <label for="">Current Image</label>
                                            <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                            <img src="../uploads/<?= $data['image']; ?>" alt="" height="50px" width="50px">
                                </div>

                                <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-0">Quantity</label>
                                            <input type="number"  name="qty" value="<?= $data['qty']; ?>" class="form-control mb-2" placeholder="Enter Quantity">
                                        </div>

                                        <div class="col-md-3">
                                            <label class="mb-0">Hide</label>  <br>
                                            <input type="checkbox" <?= $data['status']? "checked" : "" ?> name="status" id="" >
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mb-0">Trending</label> <br>
                                            <input type="checkbox" <?= $data['trending']? "checked" : "" ?> name="trending" id="" >
                                        </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Meta Title</label>
                                    <input type="text" name="meta_title" value="<?= $data['meta_title']; ?>" class="form-control mb-2">
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Meta description</label>
                                    <textarea name="meta_description" id=""  rows="3" class="form-control mb-2"><?= $data['meta_description']; ?></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-0">Meta Keyword</label>
                                    <textarea name="meta_keyword" id=""  rows="3" class="form-control mb-2"> <?= $data['meta_keywords']; ?></textarea>
                                </div>
                                
                                <div class="col-md-12">
                                    <button class="btn btn-info" name="update_product_btn" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
                <?php   }
                else
                {
                    echo "product not found ";
                }
                ?>
             
              <?php   }
              else{
                echo "Id missing from the URL";
              }
              ?>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>