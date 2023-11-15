<?php 
include('functions/userfunctions.php');

include('includes/header.php');  
if(isset($_GET['category']))
{


$category_slug = $_GET['category'];
$category_data = getSlugActive("categories",$category_slug);
$category = mysqli_fetch_array($category_data);

if($category)
{

    $cid = $category['id'];
    // echo $cid;
    ?>
        <div class="py-3 bg-primary">
            <div class="container">
                <h6 class="text-white">
                <a class="text-white text-decoration-none" href="index.php">Home /</a>    
                
                <a class="text-white text-decoration-none" href="categories.php">  
                Collection /
                </a>  
             <?= $category['name'] ?></h6>
            </div>
        </div>
        <div class="py-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2><?= $category['name'] ?></h2>
                        <hr>
    
                            <div class="row">
                            <?php
                                    $products = getProductByCategory($cid);
                                    if(mysqli_num_rows($products) > 0){
                                    foreach($products as $item){ ?>
                                <div class="col-md-3 mb-2">
                                    <a href="product-view.php?product=<?= $item['slug']; ?>" class="text-decoration-none text-black ">
                                    <div class="card shadow">
                                        <div class="card-body">
    
                                            <img src="uploads/<?= $item['image']; ?>" alt="Product Image" srcset="" class="w-100" style="height:350px;object-fit:contain;" >
                                            <h4 class="text-center text-uppercase"><?= $item['name'];?></h4>
                                                
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                    <?php   }
                                    }else{
                                    echo "No data available";
                                    }
                                ?>
                            </div>
                                 
                                
                    </div>
                </div>
            </div>
        </div>


<?php 
}
else {
    echo "Something went wrong";
     }
    }
else {
    echo "Something went wrong";
}

include('includes/footer.php')   ?>
    