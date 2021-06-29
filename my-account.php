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

?>
<style>
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
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/3.png">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">My Account Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home/</a>
                                    </li>
                                    <li>My Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="account-page-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Addresses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Account Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="logout.php" role="tab" aria-selected="false">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                                <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                                    <div class="myaccount-dashboard">
                                        <p>Hello <b><?php echo $_SESSION["username"];?></b> (not <?php echo $_SESSION["username"];?>? <a href="logout.php">Sign
                                                out</a>)</p>
                                        <p>From your account dashboard you can view your recent orders, manage your shipping and
                                            billing addresses and <a href="#">edit your password and account details</a>.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                    <div class="myaccount-orders">
                                        <h4 class="small-title">MY ORDERS</h4>
                                        <div class="table-responsive">
                                            <?php
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM orders where name='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                            ?>
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                        
                                                            <th>COUNTRY</th>
                                                            <th>NAME</th>
                                                            <th>EMAIL</th>
                                                            <th>PHONE</th>
                                                            <th>ADDRESS</th>
                                                            <th>PRODUCT</th>
                                                            <th>PRICE</th>
                                                            <th>DATE</th>
                                                            <th>PAYMENTMETHOD </th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            if(mysqli_num_rows($query_run) > 0)        
                                                            {
                                                                while($row = mysqli_fetch_assoc($query_run))
                                                                {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['country'];?></td>
                                                            <td><?php echo $row['name'];?></td>
                                                            <td><?php echo $row['email'];?>.</td>
                                                            <td><?php echo $row['phone'];?></td>
                                                            <td><?php echo $row['address'];?></td>
                                                            <td><?php echo $row['product'];?></td>
                                                            <td><?php echo $row['price'];?></td>
                                                            <td><?php echo $row['date'];?></td>
                                                            <td><?php echo $row['paymentMethod'];?></td>
                                                            <td>
                                                                <form action="myorders-code.php" method="post">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
                                                                
                                                                    <button type="submit" name="delete_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    
                                                        <?php }}?>
                                                       
                                                    </tbody>
                                            </table>
                                                   
                                        </div>

                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                                    <div class="myaccount-address">
                                        <p>The following addresses will be used on the checkout page by default.</p>
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="small-title">BILLING ADDRESS</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                            <div class="col">
                                                <h4 class="small-title">SHIPPING ADDRESS</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                    <div class="myaccount-details">
                                        <form action="#" class="myaccount-form">
                                            <div class="myaccount-form-inner">
                                                <div class="single-input single-input-half">
                                                    <label>First Name*</label>
                                                    <input type="text">
                                                </div>
                                                <div class="single-input single-input-half">
                                                    <label>Last Name*</label>
                                                    <input type="text">
                                                </div>
                                                <div class="single-input">
                                                    <label>Email*</label>
                                                    <input type="email">
                                                </div>
                                                <div class="single-input">
                                                    <label>Current Password(leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password">
                                                </div>
                                                <div class="single-input">
                                                    <label>New Password (leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password">
                                                </div>
                                                <div class="single-input">
                                                    <label>Confirm New Password</label>
                                                    <input type="password">
                                                </div>
                                                <div class="single-input">
                                                    <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                                        <span>SAVE CHANGES</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
<?php
        include('includes/scripts.php');
        include('includes/footer2.php');
?>
        

</html>