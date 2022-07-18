<?php
include('authentication.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Proerty Inquery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <div class="row">
     <div class="col-md-12">
       <div class="card">
         <div class="card-header">
           <h3 class="card-title">Sell Form Details</h3>
         </div>
             <!-- /.card-header -->
           <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
             <thead>
                <tr>
                  <th>ID</th>
                  <!-- <th>NAME</th>
                  <th>EMAIL</th> -->
                  <th>MOBILE</th>
                  <th>PROJECT</th>
                  <th>MAINTENANCE</th>
                  <th>FLOORS</th>
                  <th>ADDRESS</th>
                  <th>TYPE</th>
                  <th>BEDROOMS</th>
                  <th>FURNISHING</th>
                  <th>CONSTRACTIONS STATUS</th>
                  <th>LISTED BY</th>
                  <th>EXTERIOR</th>
                  <th>LIVINGROOM</th>
                  <th>KITCHEN</th>
                  <!-- <th>DATE & TIME</th> -->
                </tr>
             </thead>
              <tbody>
               <?php
                  $query="SELECT * FROM sellform";
                  $query_run=mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    ?>
                        
                    <?php
                    foreach($query_run as $row)
                    {
                      /* echo $row['name']; */
                      ?>
                      <tr>
                          <td>
                            <?php echo $row['id']; ?>
                          </td>
                          <td>
                            <?php echo $row['mobile']; ?>
                          </td>
                          <td>
                            <?php echo $row['project']; ?>
                          </td>
                          <td>
                            <?php echo $row['maintenance']; ?>
                          </td>
                          <td>
                            <?php echo $row['total_floor']; ?>
                          </td>
                          <td>
                            <?php echo $row['address']; ?>
                          </td>
                          <td>
                            <?php echo $row['type']; ?>
                          </td>
                          <td>
                            <?php echo $row['bedrooms']; ?>
                          </td>
                          <td>
                            <?php echo $row['furnishing']; ?>
                          </td>
                          <td>
                            <?php echo $row['const_status']; ?>
                          </td>
                          <td>
                            <?php echo $row['listed_by']; ?>
                          </td>
                          <td><?php echo '<img src="../upload/'.$row['exterior'].' " width="100px" height="100px" alt="no image1">'?></td>
                          <td><?php echo '<img src="../upload/'.$row['livingroom'].' " width="100px" height="100px" alt="no image2">'?></td>
                          <td><?php echo '<img src="../upload/'.$row['kitchen'].' " width="100px" height="100px" alt="no image3">'?></td>
                          <!-- <td>
                            <a href="" class="btn btn-info">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                          </td> -->
                        </tr>
                      <?php 
                      }
                  }
                  else
                  {
                    ?>
                    <tr>
                    <td>NO record found</td>
                    </tr>
                    <?php
                  }
               ?>
             </tbody>
           </table>
         </div>
       </div>
     </div>   
   </div>
 </div>


</div>






<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>