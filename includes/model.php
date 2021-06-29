

        <!-- Begin Modal Area -->
        <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-wrap row">

                                        <?php
                                                include('config.php');
                                                   $ii=$_GET['itemno'];
                                                $query = "SELECT * FROM glass where glass_id='$ii'";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                       
                                            ?>


                            <div class="col-lg-6">
                                <div class="modal-img">
                                    <div class="swiper-container modal-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#" class="single-img">
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
                                    
                                    <div class="selector-wrap color-option">
                                        <span class="selector-title border-bottom-0">Color</span>
                                        <select class="nice-select wide border-bottom-0 rounded-0">
                                            <option value="default">Dark Black With Shadow</option>
                                            <option value="blue">Blue</option>
                                            <option value="green">Green</option>
                                            <option value="red">Red</option>
                                        </select>
                                    </div>
                                    <div class="selector-wrap pb-55">
                                        <span class="selector-title">Size</span>
                                        <select class="nice-select wide rounded-0">
                                            <option value="medium">Medium Size With Screw</option>
                                            <option value="large">Large Size With Screw</option>
                                            <option value="small">Small Size With Screw</option>
                                        </select>
                                    </div>
                                    <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore</p>
                                    <ul class="quantity-with-btn pb-9">
                                        
                                        <li class="add-to-cart">
                                            <a class="btn btn-custom-size lg-size btn-primary" href="mycart-code.php?itemno=<?php echo $row['glass_id']; ?>">Add to cart</a>
                                        </li>
                                        
                                    </ul>
                                    
                                    <div class="product-category social-link align-items-center pb-lg-8">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Area End Here -->