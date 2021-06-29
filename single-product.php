<?php
session_start();
error_reporting(1);
 include('includes/header.php');
include('includes/navbar.php');

?>


        <!-- Begin Main Content Area  -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/2.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Product Details</h2>
                                <ul>
                                    <li>
                                        <a href="index.php">Home /</a>
                                    </li>
                                    <li>Single Product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-product-area section-space-top-100">
                <div class="container">
                    <div class="row">
                                    
                                        <?php
                                                include('config.php');
                                                $ii=$_GET['itemno'];
                                                $query = "SELECT * FROM glass where glass_id=$ii";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['glass_id'];
                                            ?>


                        <div class="col-lg-6">
                            <div class="single-product-img">
                                <div class="swiper-container single-product-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="<?php echo 'assets/images/product/all/'.$row['image'];?>" class="single-img gallery-popup">
                                                <img class="img-full" src="<?php echo 'assets/images/product/all/'.$row['image'];?>" alt="Product Image">
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt-9 pt-lg-0">
                            <div class="single-product-content">
                                <h2 class="title mb-3"><?php echo $row['gname'];?></h2>
                                <div class="price-box pb-3">
                                    <span class="new-price text-danger"><?php echo 'NRS. '.$row['price'];?></span>
                                </div>
                                
                                <p class="short-desc mb-3"><?php echo $row['description'];?></p>
                                <ul class="quantity-with-btn pb-5">
                                    
                                    <li class="add-to-cart">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="mycart-code.php?itemno=<?php echo $row['glass_id']; ?>">Add to cart</a>
                                    </li>
                                    
                                </ul>
                                <div class="product-category pb-3">
                                    <span class="title">Gender :</span>
                                    <ul>
                                        <li>
                                            <a href="#"><?php echo $row['gender'];?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-category pb-3">
                                    <span class="title">Color :</span>
                                    <ul>
                                        <li>
                                            <a href="#"><?php echo $row['color'];?></a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="product-category pb-3">
                                    <span class="title">Size :</span>
                                    <ul>
                                        <li>
                                            <a href="#"><?php echo $row['size'];?></a>
                                        </li>
                                    </ul>
                                </div>
                                
                                
                                <div class="product-category social-link align-items-center pb-lg-3">
                                    <span class="title pe-3">Share:</span>
                                    <ul>
                                        <li>
                                            <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-tumblr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                            <?php }}?>

                    </div>


        <div class="background-img" data-bg-image="assets/images/background-img/1-2-1920x716.jpg">
            <div class="product-area section-space-y-axis-100 product-arrow">
                <div class="container">
                    <div class="section-title pb-55">
                        <h2 class="title mb-0 text-center">Related Products</h2>
                    </div>
                    <div class="product-grid-view row">

                        <?php
                            include('config.php');
                            $query = "SELECT * FROM glass order by rand() LIMIT 3";
                            $query_run = mysqli_query($connection, $query);
                            if(mysqli_num_rows($query_run) > 0)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                                    $i=$row['glass_id'];
                        ?>

                        <div class="col-xl-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-img img-zoom-effect">
                                <a href="single-product.php?itemno=<?php echo $row['glass_id']; ?>">
                                    <img class="img-full" src="<?php echo 'assets/images/product/all/'.$row['image'];?>" width="100px" height="50px" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                            <a class="product-name pb-1" href="single-product.php?itemno=<?php echo $row['glass_id']; ?>"><?php echo $row['gname'];?></a>
                            <div class="price-box">
                                <div class="price-box-holder">
                                    <span>Price:</span>
                                    <span class="new-price text-primary"><?php echo 'Nrs '.$row['price'];?></span>
                                </div>
                            </div>
                        <div class="product-add-action">
                            <ul>
                            
                                <li>
                                    <a href="mycart-code.php?itemno=<?php echo $row['glass_id']; ?>" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="single-product.php?itemno=<?php echo $row['glass_id']; ?>" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                
                                <li>
                                    <a href="checkout-direct.php?itemno=<?php echo $row['glass_id']; ?>" data-tippy="Order Now" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                         <i class="pe-7s-shopbag"></i>
                                    </a>
                                </li>                                  
                                                               
                                <!-- <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Order Now" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                </div>

                            <?php }}?>

                </div>
                   
                </div>
                
            </div>
        </div>
        <!-- Product Area End Here -->



        </main>
        <!-- Main Content Area End Here  -->
 <?php 
  include('includes/scripts.php');  
 include('includes/footer2.php');
 ?>
 
     
</body>



</html>