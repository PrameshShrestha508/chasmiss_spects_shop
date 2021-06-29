<?php
session_start();
error_reporting(1);
 include('includes/header.php');
include('includes/navbar.php');
?>


        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/2.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Glasses For Male</h2>
                                <ul>
                                    <li>
                                        <a href="index.php">Home /</a>
                                    </li>
                                    <li>For Men</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                            <div class="sidebar-area style-2">
                                <div class="widgets-searchbox widgets-area py-6 mb-9">
                                    <form id="widgets-searchbox" action="search.php" method="post">
                                        <input class="input-field text-center" name="search" type="text" placeholder="Search">
                                       
                                    </form>
                                </div>
                    </div>
                    </div>
                        <div class="col-xl-12 col-lg-8 order-lg-2 order-1">
                            <div class="product-topbar">
                                <ul>
                                    <li class="page-count">Total Glasses For Male:
                                            
                                        <span>
                                        <?php 
                                                include('config.php');
                                                $query = "SELECT glass_id FROM glass where gender='male' ORDER BY glass_id";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row;
                                                ?>
                                        </span>  
                                    </li>
                                    <li class="product-view-wrap">
                                        <ul class="nav" role="tablist">
                                            <li class="grid-view" role="presentation">
                                                <a class="active" id="grid-view-tab" data-bs-toggle="tab" href="#grid-view" role="tab" aria-selected="true">
                                                    <i class="fa fa-th"></i>
                                                </a>
                                            </li>
                                            <li class="list-view" role="presentation">
                                                <a id="list-view-tab" data-bs-toggle="tab" href="#list-view" role="tab" aria-selected="true">
                                                    <i class="fa fa-th-list"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>


                            <div class="tab-content text-charcoal pt-8">
                                <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                                    <div class="product-grid-view row">

                                            <?php
                                                include('config.php');
                                                $query = "SELECT * FROM glass where gender='male'";
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



                                <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                                    <div class="product-list-view row">

                                            <?php
                                                include('config.php');
                                                $query = "SELECT * FROM glass where gender='male'";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        
                                            ?>
                                        <div class="col-12">
                                            <div class="product-list-item">
                                                <div class="product-list-img img-zoom-effect">
                                                    <a href="single-product-variable.html">
                                                        <img class="img-full" src="<?php echo 'assets/images/product/all/'.$row['image'];?>" alt="Product Images">
                                                    </a>
                                                </div>
                                                <div class="product-list-content">
                                                    <a class="product-name pb-2" href="single-product-variable.html"><?php echo $row['gname'];?></a>
                                                    <div class="price-box pb-1">
                                                        <span class="new-price"><?php echo 'Nrs '.$row['price'];?></span>
                                                    </div>
                                                    
                                                    <p class="short-desc mb-0"><?php echo $row['description'];?></p>
                                                    <div class="product-add-action">
                                                        <ul>
                                                            <li>
                                                                <a href="mycart-code.php?itemno=<?php echo $row['glass_id']; ?>" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                                <a href="single-product.php?itemno=<?php echo $row['glass_id']; ?>"  data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-look"></i>
                                                                </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="wishlist.php" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.php" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
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
                            <div class="pagination-area pt-10">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

        
        <?php include('includes/footer2.php');?>
        <?php include('includes/model.php');?>
        <?php include('includes/scripts.php');?>
</body>



</html>