<?php
error_reporting(1);
session_start();
if(!$_SESSION['username'])
{   
    echo '<script>
    alert("Please Login first");
    window.location.href="login-register.php";
    </script>';
}
 include('includes/header.php');
include('includes/navbar.php');
include('includes/scripts.php');
?>
<style>
.table-content table td.product-thumbnail img {
    width: 99px;
    height: 100px;
}

.section-space-y-axis-100 {
    padding-top: 50px;
    padding-bottom: 78px;
}
.breadcrumb-height {
    height: 250px;
}

</style>
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/3.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Cart Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.php">Home/</a>
                                    </li>
                                    <li>Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="javascript:void(0)">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th class="product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Gender</th>  
                                                <th class="product-subtotal">Price</th>
                                                <th class="product_remove">Buy Now</th>
                                                <th class="product_remove">remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                
                                                <?php
                                                
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM mycart where buyer='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                ?>
                                            <tr>
                                               
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="<?php echo 'assets/images/product/all/'.$row['image'];?>" width="50px" height="50px" alt="Cart Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#"><?php echo $row['gname'];?></a></td>
                                                <td class="product-price"><span class="amount"><?php echo $row['gender'];?></span></td>
                                                <!-- <td class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton">
                                                            <i class="fa fa-minus"></i>
                                                        </div>
                                                        <div class="inc qtybutton">
                                                            <i class="fa fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </td> -->
                                               
                                               
                                             <td class="product-subtotal"><span class="amount"><?php echo $row['price'];?></span></td>
                                             <!-- <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td> -->
                                                <td> <button class="btn btn-success text-white"><a href="checkout.php?itemno=<?php echo $row['cart_id']; ?>">Buy Now</a></button> </td>
                             
                                                <td>
                                                    <form action="myorders-code.php" method="post">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['cart_id']; ?>">
                                                        <button type="submit" name="delete_cart_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> DELETE</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                                } 
                                            }
                                            else {
                                                echo "No Record Found";
                                            }
                                            ?>
                                            



                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <a href="index.php">Back To Shopping</a>
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

        <?php include('includes/footer2.php');?>

       

</body>



</html>