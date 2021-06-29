<?php 
session_start();
error_reporting(1);
include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<body>
<style>
.section-space-y-axis-100 {
    padding-top: 50px;
    padding-bottom: 50px;
}
.banner_area{
    width:90%;
    margin:30px auto;
}
</style>

        <!-- Begin Slider Area -->
       <?php include('includes/banner.php');?>
        <!-- Slider Area End Here -->

       <!-- Start Banner Area -->
		<div class="banner_area">
			<div class="row">

				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#">
								<img src="assets\images\banner\banner4.jpg" alt="banner img">
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#">
								<img src="assets\images\banner\banner3.jpg" alt="banner img">
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#">
								<img src="assets\images\banner\banner-1.jpg" height="240px" alt="banner img">
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- End Banner Area -->

            <!-- Begin Shipping Area -->
            <div class="shipping-area section-space-y-axis-100">
                <div class="container">
                    <div class="shipping-bg" data-bg-image="assets/images/shipping/bg/1-1-1280x202.jpg">
                        <div class="row shipping-wrap py-5 py-xl-0">
                            <div class="col-lg-4">
                                <div class="shipping-item">
                                    <div class="shipping-img">
                                        <img src="assets/images/shipping/icon/plane.png" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-content">
                                        <h2 class="title">Free Shipping</h2>
                                        <p class="short-desc mb-0">Provide free home delivery for all product over $100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 pt-4 pt-lg-0">
                                <div class="shipping-item">
                                    <div class="shipping-img">
                                        <img src="assets/images/shipping/icon/earphones.png" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-content">
                                        <h2 class="title">Online Support</h2>
                                        <p class="short-desc mb-0">To satisfy our customer we try to give support online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 pt-4 pt-lg-0">
                                <div class="shipping-item">
                                    <div class="shipping-img">
                                        <img src="assets/images/shipping/icon/shield.png" alt="Shipping Icon">
                                    </div>
                                    <div class="shipping-content">
                                        <h2 class="title">Secure Payment</h2>
                                        <p class="short-desc mb-0">We ensure our product Good quality all times</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shipping Area End Here -->

        </div>

       <!-- Begin Product Area -->
     <?php include('popular-item.php');?>
        <!-- Product Area End Here -->



        <!-- Begin Newsletter Area -->
        <div class="newsletter-area section-border-y-axis">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="newsletter-img">
                            <img src="assets/images/product/medium-size/special-deals/glass1.jpg" alt="Newsletter Image">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-md-center pb-10 pb-md-0">
                        <div class="newsletter-content">
                            <h2 class="newsletter-title mb-4">Have a Special Discount</h2>
                            <h3 class="newsletter-sub-title text-primary mb-8">All New Glasses for Male Female</h3>
                            <form class="newsletter-form" id="mc-form" action="#">
                                <input class="input-field" id="mc-email" type="email" autocomplete="off" name="Your Email Address" value="Your Email Address" onblur="if(this.value==''){this.value='Your Email Address'}" onfocus="if(this.value=='Your Email Address'){this.value=''}">
                                <div class="button-wrap">
                                    <button class="btn btn-custom-size btn-primary" id="mc-submit">Subscribe</button>
                                </div>
                            </form>
                            <!-- Mailchimp Alerts -->
                            <div class="mailchimp-alerts text-centre pt-5">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End Here -->

     

        <!-- Begin Banner Area -->
        <div class="banner-area section-border-y-axis ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-md-center order-2 order-md-1 pt-5 pt-md-0">
                        <div class="banner-content text-center">
                            <div class="inner-img mb-2">
                                <img src="assets/images/banner/inner-img/1-1-201x57.png" alt="Banner Image">
                            </div>
                            <h3 class="title text-charcoal">Deal of the day</h3>
                            <h4 class="sub-title text-primary mb-6">Hot Deal ! Sale Up To 30% Off </h4>
                            <div class="countdown-wrap pb-8">
                                <div class="countdown item-4" data-countdown="2022/03/04" data-format="short">
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time daysLeft"></span>
                                        <span class="countdown__text daysText"></span>
                                    </div>
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time hoursLeft"></span>
                                        <span class="countdown__text hoursText"></span>
                                    </div>
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time minsLeft"></span>
                                        <span class="countdown__text minsText"></span>
                                    </div>
                                    <div class="countdown__item">
                                        <span class="countdown__time secsLeft"></span>
                                        <span class="countdown__text secsText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrap pb-8 pb-md-0">
                                <a class="btn btn-custom-size lg-size btn-primary" href="shop-men.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="banner-img">
                            <img src="assets/images/banner/glass2.jpg" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Testimonial Area -->
       <?php include('testimonial.php');?>
        <!-- Testimonial Area End Here -->

       

        <?php include('includes/footer.php');?>
        <?php include('includes/model.php');?>
        <?php include('includes/scripts.php');?>


</body>



</html>