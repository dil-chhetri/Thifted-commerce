<?php 

include('functions/userfunctions.php');
include('includes/header.php');
include('authenticate.php'); 

?>
     <div class="py-3 bg-primary">
        <div class="container">
            <h6 class="text-white">
                <a class="text-white" href="index.php">
                Home /
                </a>
                <a class="text-white" href="cart.php">Cart</a> </h6>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="">
                <div class="row ">
                    <div class="col-md-12">
                        <div id="mycart">
                        <?php 
                  $items = getCartItems(); 
                  if(mysqli_num_rows($items) > 0){ 
                        ?>
                            <div class="row align-items-center">
                               
                                <div class="col-md-5">
                                    <h6>Product</h6>
                                </div>
                                <div class="col-md-3">
                                    <h6>Price</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>Quantity</h6>
                                </div>
                                <div class="col-md-2">
                                    <h6>Remove</h6>
                                </div>
                              
                               

                            </div>

                            <div id="">
                                    <?php 
                                    
                                    foreach ($items as $citem) {
                                    ?>
                                    <div class="card product_data shadow-sm mb-3 " >

                                            
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <img src="uploads/<?= $citem['image'] ?>" alt="<?= $citem['name'] ?>" width="80px" height="100px">
                                                </div>
                                                <div class="col-md-3">
                                                    <h5><?= $citem['name'] ?></h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5>Rs <?= $citem['selling_price'] ?></h5>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="hidden" name="" class="prodId" value="<?= $citem['product_id'] ?>">
                                                    <div class="input-group mb-3" style="width: 130px;">
                                                        <button class="input-group-text decrement-btn updateQty">-</button>
                                                        <input type="text" class="form-control bg-white text-center input-qty" value="<?= $citem['product_qty']; ?>" disabled>
                                                        <button class="input-group-text increment-btn updateQty">+</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid'] ?>"><i class="fa fa-trash me-2"></i>Remove</button>
                                                </div>
                                            </div>
                                    </div>

                                            <?php    
                                                
                                            }
                                        ?>
                            </div>    

                            <div class="float-end">
                                <a href="checkout.php" class="btn btn-outline-primary">Proceed to checkout</a>
                            </div>
                      <?php } 
                      else
                      {
                        echo "Your cart is empty";
                      }
                      ?>      
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php include('includes/footer.php')   ?>
    