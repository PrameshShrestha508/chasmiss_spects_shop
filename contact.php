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
                                <h2 class="breadcrumb-heading">Contact Us</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home/</a>
                                    </li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin Shipping Area -->
            <div class="shipping-area shipping-style-2 section-space-y-axis-100">
                <div class="container">
                    <div class="row shipping-wrap py-5 py-xl-0">
                        <div class="col-lg-4 col-sm-6">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="assets/images/shipping/icon/phone.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Phone/Fax</h2>
                                    <p class="short-desc mb-0">0123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="assets/images/shipping/icon/message.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Email/Web</h2>
                                    <p class="short-desc mb-0">chasmiss@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 pt-4 pt-xl-0">
                            <div class="shipping-item">
                                <div class="shipping-img">
                                    <img src="assets/images/shipping/icon/home.png" alt="Shipping Icon">
                                </div>
                                <div class="shipping-content">
                                    <h2 class="title">Address:</h2>
                                    <p class="short-desc mb-0">Your address goes here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shipping Area End Here -->

            <div class="contact-form-area section-space-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form-wrap">
                                <div class="contact-img">
                                    <img src="assets/images/contact/1-1-520x278.png" alt="Contact Images">
                                </div>
                                <form id="contact-form" class="contact-form" action="https://htmlmail.hasthemes.com/mamunur/tromic.php">
                                    <h4 class="contact-form-title mb-7">Send Us a Massage</h4>
                                    <div class="group-input">
                                        <div class="form-field me-xl-6">
                                            <input type="text" name="con_name" id="con_name" placeholder="Name*" class="input-field">
                                        </div>
                                        <div class="form-field mt-6 mt-xl-0">
                                            <input type="text" name="con_email" id="con_email" placeholder="Email*" class="input-field">
                                        </div>
                                    </div>
                                    <div class="form-field mt-6">
                                        <textarea name="con_message" id="con_message" placeholder="Message" class="textarea-field"></textarea>
                                    </div>
                                    <div class="button-wrap mt-8">
                                        <button type="submit" value="submit" class="btn btn btn-custom-size lg-size btn-primary btn-secondary-hover rounded-0" name="submit">Post Comment</button>
                                        <p class="form-messege mt-5 mb-0"></p>
                                    </div>
                                </form>
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