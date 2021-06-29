<?php
session_start();
$id=$_SESSION['username'];
include("config.php");
$itemno=$_REQUEST['itemno'];

if(!$_SESSION['username']=='')
{

        $query = "SELECT * FROM glass where  glass_id=$itemno";
        $query_run = mysqli_query($connection, $query);
        if(mysqli_num_rows($query_run) > 0)        
        {
        
            while($row = mysqli_fetch_assoc($query_run))
                {
                    $glass_name=$row['gname'];
                    $buyer=$_SESSION['username'];
                    $gender=$row['gender'];
                    $image=$row['image'];
                    $price=$row['price'];
                    

        if(mysqli_query($connection,"insert into mycart(gname,image,price,gender,buyer) values('$glass_name','$image','$price','$gender','$buyer')"))
            {
            header("location:cart.php");
            }
        else
        {
        // header("location:index.php");
        }

         }       }
}else{
    header("location:login-register.php");
}
	
?>