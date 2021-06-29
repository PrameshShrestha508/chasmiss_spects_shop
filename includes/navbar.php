
 
    <div class="main-wrapper">

    <header class="main-header-area">
            <div class="header-middle header-sticky py-6 py-lg-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">
                            <!-- <h1> <a class="navbar-brand" href="index.php">
                    
                     <span class="fa fa-industry w3llog-icon" aria-hidden="true"></span>Chasmiss</span>
                        </a></h1> -->
                                <a href="index.php" class="header-logo">
                                    <img src="assets\images\logo\logo1.jpg" height="130px" alt="Header Logo">
                                </a>

                                <div class="main-menu d-none d-lg-block">
                                    <nav class="main-nav">
                                        <ul>
                                            <li class="drop-holder">
                                                <a href="index.php">Home
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                
                                            </li>
                                            <li class="drop-holder">
                                                <a href="#">Shop
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="shop-men.php">For Men</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-female.php">For Female</a>
                                                    </li>
                                                </ul>
                                       
                                            </li>
                                            <li class="drop-holder">
                                                <a href="about.php">About
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                
                                            </li>
                                            <!-- <li class="drop-holder">
                                                <a href="blog.php">Blog
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">
                                                    <li>
                                                        <a href="blog-listview.php">Blog List View</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-detail.php">Blog Detail</a>
                                                    </li>
                                                </ul>
                                            </li> -->
                                            <li>
                                                <a href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-lg-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-label="setting" aria-expanded="false">
                                                <i class="pe-7s-user"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="my-account.php">My account</a></li>
                                                <li><a class="dropdown-item" href="login-register.php">Login | Register</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#exampleModal" class="search-btn bt" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <!-- <li class="d-none d-lg-block">
                                            <a href="wishlist.php">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li> -->
                                        <!-- <li class="d-none d-lg-block">
                                            <a href="cart.php">
                                            <i class="pe-7s-shopbag"></i> -->
                                            <!-- <span class="quantity">5</span> -->
                                            <!-- </a>
                                        </li> -->
                                       
                                        <li class="minicart-wrap me-3 me-lg-0">
                                            <a href="cart.php" class="minicart-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <span class="quantity">
                                            <?php 
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT cart_id FROM mycart where buyer='$id' ORDER BY cart_id";  
                                                $query_run = mysqli_query($connection, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo $row;
                                            ?>
                                            </span>
                                            </a>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-body">
                    <div class="inner-body">
                        <div class="offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-user-info text-center px-6 pb-5">
                            <div class=" text-silver">
                                <p class="shipping mb-0">Free delivery on order over <span class="text-primary">$200</span></p>
                            </div>
                            <ul class="dropdown-wrap justify-content-center text-silver">
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        English
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                        <li><a class="dropdown-item" href="#">French</a></li>
                                        <li><a class="dropdown-item" href="#">Italian</a></li>
                                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button" id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        USD
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                        <li><a class="dropdown-item" href="#">GBP</a></li>
                                        <li><a class="dropdown-item" href="#">ISO</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                        <li><a class="dropdown-item" href="my-account.php">My account</a></li>
                                        <li><a class="dropdown-item" href="login-register.php">Login | Register</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="wishlist.php">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="index.php">
                                            <span class="mm-text">Home 
                                                <i class="pe-7s-angle-down"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.php">
                                            <span class="mm-text">About Us</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop 
                                                <i class="pe-7s-angle-down"></i>
                                             </span>
                                             <ul class="drop-menu">
                                                    <li>
                                                        <a href="shop-men.php">For Men</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-female.php">For Female</a>
                                                    </li>
                                                </ul>
                                        </a>
                                               
                                    </li>
                                    <li>
                                        <a href="about.php">
                                            <span class="mm-text">About</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <span class="mm-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-search">
                                <span class="searchbox-info">Start typing and press Enter to search or ESC to close</span>
                                <form action="../search.php" class="hm-searchbox" method="post">
                                    <input type="text" name="search" value="Search entire store here..." onblur="if(this.value==''){this.value='Search entire store here...'}" onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </header>
        <!-- Main Header Area End Here -->