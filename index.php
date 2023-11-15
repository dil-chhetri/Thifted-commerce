<?php 

include('functions/userfunctions.php');
include('includes/header.php');   
include('includes/slider.php');
?>
    
    <div class="py-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <h4>Trending Products</h4>
                    <div class="underline mb-2"></div>

                   
                        <div class="owl-carousel">

                        
                            <?php 
                                $trendingProducts = getAllTrending();
                                if(mysqli_num_rows($trendingProducts) > 0)
                                {
                                    foreach($trendingProducts as $item)
                                    { ?>
                                            <div class="item">
                                                <a href="product-view.php?product=<?= $item['slug']; ?>" class="text-decoration-none text-black ">
                                                    <div class="card shadow">
                                                        <div class="card-body">

                                                        <img src="uploads/<?= $item['image']; ?>" alt="Product Image" srcset="" class="w-100" style="height:350px;object-fit:contain;" >
                                                        <h6 class="text-center text-uppercase"><?= $item['name'];?></h6>
                                                            
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php
                                    }
                                }
                            ?>  
                        </div>
                
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-f2f2f2">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <h4>About Us</h4>
                       <div class="underline mb-2"></div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, aut repellat facilis non eius voluptatum voluptatem asperiores iusto corporis ipsum dolor, neque error quas consectetur laudantium culpa suscipit illo. Soluta, laboriosam vitae. Optio ab debitis rem vitae repellendus incidunt accusantium commodi fugiat esse, labore quidem mollitia neque reprehenderit qui, natus veniam quisquam facere laudantium corrupti? Quod enim beatae esse facere corporis eveniet pariatur aut neque optio architecto distinctio ullam fuga, quibusdam ducimus ratione sed quae iste voluptas ipsam nam, harum nihil magni saepe. Suscipit commodi ea at eveniet libero amet doloribus voluptatum odio repellendus unde? Suscipit asperiores necessitatibus nostrum praesentium.
                            </p>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis fuga distinctio quas aperiam amet esse voluptas veritatis quidem, quaerat tempore!
                                <br>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo rerum dolor cumque quos expedita quo animi officiis eum nisi quia.
                            </p>
                       
                   
                        
                
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-dark">
        <div class="container">
            <div class="row ">
                <div class="col-md-3">
                    <h4 class="text-white">Thrifted</h4>
                       <div class="underline mb-2"></div>
                      <a href="index.php" class="text-white">   <i class="fa fa-angle-right"></i>Home </a></br>
                      <a href="#" class="text-white">   <i class="fa fa-angle-right"></i>About Us </a></br>
                      <a href="cart.php" class="text-white">   <i class="fa fa-angle-right"></i>Cart </a></br>
                      <a href="categories.php" class="text-white">   <i class="fa fa-angle-right"></i>Collection </a>
                </div>

                <div class="col-md-3">
                    <h4 class="text-white">Address</h4>
                    <p class="text-white">
                        #24, Ground Floor,
                        2nd Street, People Plaza,
                        Katamandu, Nepal.
                    </p>
                    <a href="tel:+9803010396" class="text-white"><i class="fa fa-phone"> +977 9803010396</i></a>
                    <a href="mailto:dolchhetri778@gmail.com" class="text-white"><i class="fa fa-envelope"> dolchhetri778@gmail.com</i></a>
                     
                </div>
                <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5941.559219496858!2d85.32647429130161!3d27.690343053903824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b032e93fc1%3A0x4a61dc499d928027!2sSt.%20Xavier&#39;s%20College!5e0!3m2!1sen!2snp!4v1671448189581!5m2!1sen!2snp" class="w-100" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2 bg-danger">
        <div class="text-center">
            <p class="mb-0 text-white">All rights reserved. Copyright @ Dil Chhetri <?= date('Y') ?></p>
        </div>
    </div>
<?php include('includes/footer.php')   ?>
    <script>
        $(document).ready(function () {
                $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                0:{
                items:1
                },
                600:{
                items:3
                },
                1000:{
                items:5
                }
                }
            })
        });
    </script>