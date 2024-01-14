 <?php
session_start();
include("../../db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$cat_title=$_POST['cat_title'];

mysqli_query($con,"insert into categories(cat_id, cat_title) values ('','$cat_title')") 
			or die ("Query 1 is inncorrect........"); 
mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Category</h4>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Category Title</label>
						  <br>
						  <br>
                          <input style="background-color: #202940;" type="text" id="first_name" name="cat_title" class="form-control" required>
                        </div>
                      </div>

                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary">Add</button>
                    
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
       

      <?php
include "footer.php";
?>