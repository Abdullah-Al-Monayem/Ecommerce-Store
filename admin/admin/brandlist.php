
    <?php
session_start();
include("../../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$brand_id=$_GET['brand_id'];

/*this is delet quer*/
mysqli_query($con,"delete from brands where brand_id='$brand_id'")or die("query is incorrect...");
}

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Manage Brand</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr><th>Brand id</th>
                        <th>Brand Title</th>
	<th><a href="addbrand.php" class="btn btn-success">Add New</a></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select brand_id,brand_title from brands")or die ("query 2 incorrect.......");

                        while(list($brand_id,$brand_title)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td>$brand_id</td>
                         <td>$brand_title</td>";
                        echo"<td>
                     
                        <a class='btn btn-danger' href='brandlist.php?brand_id=$brand_id&action=delete'>Delete<div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>