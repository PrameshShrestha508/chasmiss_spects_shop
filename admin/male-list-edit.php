<?php
     include('security.php');
     include('includes/header.php'); 
    include('includes/navbar.php'); 
     include('includes/database/dbconfig.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Glass's Data </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM glass WHERE glass_id='$id' && gender='male'";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="male-list-code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['glass_id'] ?>">

                            <div class="form-group">
                                <label>Glass Name</label>
                                <input type="text" name="edit_gname" value="<?php echo $row['gname'] ?>" class="form-control"
                                    placeholder="Enter Glass name">
                            </div><div class="form-group">
                                <label>Price</label>
                                <input type="text" name="edit_price" value="<?php echo $row['price'];?>"
                                    class="form-control" placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label>Color</label>
                                <input type="text" name="edit_color" value="<?php echo $row['color'] ?>"
                                    class="form-control" placeholder="Enter color">
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <input type="text" name="edit_size" value="<?php echo $row['size'] ?>"
                                    class="form-control" placeholder="Enter size">
                            </div>
                        <label>Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="male" <?php if($row['gender']=="male"){ echo "checked";}?>  name="gender" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Male
                                </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="female" <?php if($row['gender']=="female"){ echo "checked";}?> name="gender" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                            Female
                            </label>
                        </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>"
                                    class="form-control" placeholder="Enter Description">
                            </div>
                            
                            
                            <div class="form-group">
                                  <label>Current Image</label><br>
                                  <img src="<?php echo '../assets/images/product/all/'.$row['image'];  ?>" height="100px">
                            </div>
                            
                            <div class="form-group">
                                <label>Image</label>
                                 <input type="file" name="fileToUpload" class="form-control">
                            </div>

                            <a href="male-list.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>