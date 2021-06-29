<?php
 session_start();
 if(!$_SESSION['username'])
{
    header('Location:login.php');
}
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/database/dbconfig.php');

?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add male's Glass Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="male-list-code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Glass Name</label>
                <input type="text" name="gname" class="form-control" placeholder="Enter Glass Name">
            </div>
            
            
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="color" class="form-control" placeholder="Enter color">
            </div>
            <div class="form-group">
                <label>Size</label>
                <input type="text" name="size" class="form-control" placeholder="Enter Size">
            </div>
            <label>Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="male" name="gender" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" value="female" name="gender" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
              Female
              </label>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
            
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="fileToUpload" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="male_save" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Male's Glass Data  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">
<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
  echo'<h2>'.$_SESSION['success'].'</h2>';
  unset($_SESSION['success']);

}

if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
  echo'<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
  unset($_SESSION['status']);

}

?>
    <div class="table-responsive">
    <?php
                $query = "SELECT * FROM glass where gender='male'";
                $query_run = mysqli_query($connection, $query);
            ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Glass Name </th>
           
            <th>Price</th>
            <th>color</th>
            <th>Size</th>
            <th>Description</th>
            <th>Images</th>
            <th>EDIT </th>
            <th>DELETE </th>
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
                                <td><?php  echo $row['glass_id']; ?></td>
                                <td><?php  echo $row['gname']; ?></td>
                                
                                <td><?php  echo $row['price']; ?></td>
                                <td><?php  echo $row['color']; ?></td>
                                <td><?php  echo $row['size']; ?></td>
                                <td><?php  echo $row['description']; ?></td>
                                <td><img src="<?php echo '../assets/images/product/all/'.$row['image']; ?>" height="100px"></td>
                                <td>
                                    <form action="male-list-edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['glass_id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="male-list-code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['glass_id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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
  </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>