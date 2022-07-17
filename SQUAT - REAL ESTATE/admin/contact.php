<?php
/* include('authentication.php'); */
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
              <li class="breadcrumb-item active">Contact Profile</li>
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
           <h3 class="card-title">CONTACT DETAILS OF USER</h3>
         </div>
             <!-- /.card-header -->
           <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
             <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>SUBJECT</th>
                  <th>WEBSITE</th>
                  <th>MESSAGE</th>
                  <th>DATE & TIME</th>
                </tr>
             </thead>
              <tbody>
               <?php
                  $query="SELECT * FROM contact";
                  $query_run=mysqli_query($con,$query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $row)
                    {
                      /* echo $row['name']; */
                      ?>
                      <tr>
                          <td>
                            <?php echo $row['id']; ?>
                          </td>
                          
                          <td>
                            <?php echo $row['name']; ?>
                          </td>
                          <td>
                            <?php echo $row['email']; ?>
                          </td>
                          <td>
                            <?php echo $row['subject']; ?>
                          </td>
                          <td>
                            <?php echo $row['website']; ?>
                          </td>
                          <td>
                            <?php echo $row['message']; ?>
                          </td>
                          <td>
                            <?php echo $row['date_time']; ?>
                          </td>
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