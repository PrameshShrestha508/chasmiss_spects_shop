<?php
session_start();

if(!$_SESSION['username'])
{
    header('Location:login.php');
}
 include('includes/header.php');
include('includes/navbar.php');

?>
<?php 
include('config.php');
if(isset($_POST['submit']))

{
    $country = $_POST['country'];
	$name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$product = $_POST['product'];
	$address = $_POST['address'];
	$price = $_POST['price'];
	$date = $_POST['date'];
	$paymentMethod = $_POST['paymentMethod'];




	$query1 = "INSERT INTO orders(country,name,email,phone,address,product,price,date,paymentMethod) VALUES ('$country','$name','$email','$phone','$address','$product','$price','$date','$paymentMethod')";
            $query_run1 = mysqli_query($connection, $query1);
			
			if($query_run1){
				echo "<script>window.location.href='my-account.php';</script>";
				exit;
			}else{
				mysqli_error($connection);
			}



}?>
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/2.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Checkout Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home/</a>
                                    </li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-area section-space-y-axis-100">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <?php 
								$ii=$_GET['itemno'];
								$query = "SELECT * FROM mycart where cart_id=$ii";
								$query_run = mysqli_query($connection, $query);
								if(mysqli_num_rows($query_run) > 0)        
								{
									while($row = mysqli_fetch_assoc($query_run))
									{

							?> 
                            <form action="" method="post" autocomplete="off">
                                <div class="checkbox-form">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="country-select clearfix">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="myniceselect nice-select wide" name="country">
                                                    <option data-display="Nepal">Nepal</option>
                                                    <option value="India">India</option>
                                                    <option value="china">China</option>
                                                    <option value="usa">Usa</option>
                                                    <option value="london">London</option>
                                                    <option value="austrila">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="Your Name" name="name" value="<?php echo $_SESSION['username'];?>" readonly>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input placeholder="Enter Your Email" type="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input placeholder="Your Address" type="text" name="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" name="phone" placeholder="Enter Your Phone Number ">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Product Name <span class="required">*</span></label>
                                                <input type="text" name="product" value="<?php echo $row['gname'];?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Price <span class="required">*</span></label>
                                                <input placeholder="" type="text" name="price" value="<?php echo $row['price'];?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="form-label">Pickup Date</span>
                                            <input class="form-control" name="date" type="date" required>			
                                        </div>
                                        <div class="country-select clearfix">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="myniceselect nice-select wide" name="paymentMethod">
                                                    <option data-display="COD">Cash On Delivery</option>
                                                    <option value="Esewa">Esewa</option>
                                                    <option value="Credit">Credit</option>
                                                </select>
                                            </div>
                                        
                                        
                                            <div class="col-md-6">
                                            <button class="btn btn-primary" name="submit">Order Now</button>
                                        </div>
                                    </div>
                                        
                                </div>
                            </form>
                            <?php }}?>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->

       <?php include('includes/footer2.php');?>
       <?php include('includes/scripts.php');?>
</body>



</html>