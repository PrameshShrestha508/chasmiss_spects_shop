<?php
session_start();
error_reporting(1);
 include('includes/header.php');
include('includes/navbar.php');


?>



        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/3.png">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Login & Register Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home/</a>
                                    </li>
                                    <li>Login | Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-register-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="login-register-code.php" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Login</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>UserName*</label>
                                            <input type="text" placeholder="username" name="uname">
                                        </div>
                                        <div class="col-lg-12">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pt-1 mt-md-0">
                                            <div class="forgotton-password_info">
                                                <a href="#"> Forgotten pasward?</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                        <input type="submit" name="lsubmit" value="Login" class="btn  btn-primary"> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 pt-10 pt-lg-0">
                            <form action="login-register-code.php" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <label>UserName</label>
                                            <input type="text" name="uname" placeholder="UserName">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label>Email Address*</label>
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Phone No.</label>
                                            <input type="text" name="phone" placeholder="Phone No">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Address">
                                        </div>
                                        <div class="col-md-12">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        
                                        <div class="col-12">
                                        <input type="submit" name="rsubmit" value="Register" class="btn btn-custom-size lg-size btn-primary">  
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

<?php
 include('includes/footer2.php');

include('includes/scripts.php');
?>

</body>



</html>