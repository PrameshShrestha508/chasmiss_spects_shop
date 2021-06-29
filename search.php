<?php 
session_start();
error_reporting(1);
include('includes/header.php');?>
<?php include('includes/navbar.php');?>
<!-- Begin Product Area -->
<div class="background-img" data-bg-image="assets/images/background-img/1-2-1920x716.jpg">
            <div class="product-area section-space-y-axis-100 product-arrow">
                <div class="container">
                  
                    <div class="section-title pb-55">
                        <p class="title mb-0 text-center">Your Searched Record:</p>
                    </div>
                    
                    <div class="product-grid-view row">
                    <?php
                                include('config.php');
                                $search=$_POST['search'];
                                $query = "SELECT * FROM glass where gname LIKE '%{$search}%'";
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
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
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
        <?php include('includes/footer.php');?>
<?php include('includes/scripts.php');?>