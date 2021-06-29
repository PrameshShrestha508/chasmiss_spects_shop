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
                                <h2 class="breadcrumb-heading">Product Style</h2>
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
        </main>
        <!-- Main Content Area End Here  -->
 <?php include('includes/footer2.php');?>
      
     
</body>



</html>