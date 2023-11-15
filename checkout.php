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
                <a class="text-white" href="checkout.php">Checkout</a> </h6>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="card">
                  <div class="card-body">  
                    <div class="row ">
                        <div class="col-md-7">
                            <h5>Basic Details</h5>
                            <hr>
                        <form action="functions/placeorder.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="" class="fw-bold">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="" class="fw-bold">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="" class="fw-bold">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter your phone" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="" class="fw-bold">Pin Code</label>
                                        <input type="text" name="pincode" class="form-control" placeholder="Enter your pincode" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="" class="fw-bold">Address</label>
                                        <textarea name="address" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            
                           
                                </div>
                                <div class="col-md-5">
                                    <h5>Order Details</h5>
                                    <hr>

                                        
                                                <?php 
                                                $items = getCartItems();  
                                                $totalPrice = 0;
                                                foreach ($items as $citem) {
                                                ?>
                                                <div class="mb-1 border" >

                                                        
                                                        <div class="row align-items-center">
                                                            <div class="col-md-2">
                                                                <img src="uploads/<?= $citem['image'] ?>" alt="<?= $citem['name'] ?>" width="60px" height="70px" style="object-fit:contain;">
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label><?= $citem['name'] ?></label>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <label >x <?= $citem['product_qty'] ?></label>

                                                            </div>
                                                            <div class="col-md-3">
                                                            <label><?= $citem['selling_price'] ?></label>

                                                            </div>
                                                            
                                                        
                                                            
                                                        
                                                        </div>
                                                </div>

                                                        <?php    
                                                            $totalPrice += $citem['selling_price'] * $citem['product_qty'];
                                                        }
                                                            ?>
                                                <hr>
                                                <h5>Total Price : <span class="float-end fw-bold"><?= $totalPrice;  ?></span></h5>
                                            <div class="">
                                                <input type="hidden" name="payment_mode" value="COD">
                                                <button  type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm and place order | COD</button>
                                            </div>
                                                
                                        </div>
                                    </div>
                         </form>
            </div>
         </div>
        </div>
    </div>
<?php include('includes/footer.php')   ?>
