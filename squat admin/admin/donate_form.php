<?php
//include('authentication.php');
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
              <li class="breadcrumb-item active">Donate Form</li>
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
           <h3 class="card-title">DONATE FORM DETAILS OF USER</h3>
         </div>
             <!-- /.card-header -->
           <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
             <thead>
                <tr>
                  <th>ID</th>
                  <th>FIRST NAME</th>
                  <th>MIDDLE NAME</th>
                  <th>LAST NAME</th>
                  <th>CURRENT ADDRESS1</th>
                  <th>CURRENT ADDRESS2</th>
                  <th>CITY</th>
                  <th>DISTRICT</th>
                  <th>STATE</th>
                  <th>PINCODE</th>
                  <th>MOBILE</th>
                  <th>OCCUPATION</th>
                  <th>EMAIL</th>
                  <th>DATE OF BIRTH</th>
                  <th>AGE</th>
                  <th>GENDER</th>
                  <th>BLOOD GROUP</th>
                  <th>EMERGENCY CONTACT NAME</th>
                  <th>EMERGENCY CONTACT NUMBER</th>
                  <th>CURRENT RESIDENTIAL ADDRESS </th>
                  <th>CHOOSE IDENTITY CARD</th>
                  <th>IDENTITY CARD NUMBER</th>
                  <th>ORGAN NAME</th>
                  <th>SOCIAL MEDIA LINK</th>
                  <th>HEAR FROM</th>
                </tr>
             </thead>
              <tbody>
               <?php
                  $query="SELECT * FROM donate_form";
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
                            <?php echo $row['firstname']; ?>
                          </td>
                          <td>
                            <?php echo $row['middlename']; ?>
                          </td>
                          <td>
                            <?php echo $row['lastname']; ?>
                          </td>
                          <td>
                            <?php echo $row['current_address1']; ?>
                          </td>
                          <td>
                            <?php echo $row['address_line2']; ?>
                          </td>
                          <td>
                            <?php echo $row['city']; ?>
                          </td>
                          <td>
                            <?php echo $row['district']; ?>
                          </td>
                          <td>
                            <?php echo $row['state']; ?>
                          </td>
                          <td>
                            <?php echo $row['pincode']; ?>
                          </td>
                          <td>
                            <?php echo $row['mobile']; ?>
                          </td>
                          <td>
                            <?php echo $row['Occupation']; ?>
                          </td>
                          <td>
                            <?php echo $row['Email']; ?>
                          </td>
                          <td>
                            <?php echo $row['Date_of_Birth']; ?>
                          </td>
                          <td>
                            <?php echo $row['Age']; ?>
                          </td>
                          <td>
                            <?php echo $row['Gender']; ?>
                          </td>
                          <td>
                            <?php echo $row['Blood_Group']; ?>
                          </td>
                          <td>
                            <?php echo $row['Emergency_Contact_Name']; ?>
                          </td>
                          <td>
                            <?php echo $row['Emergency_Contact_Number']; ?>
                          </td>
                          <td>
                            <?php echo $row['Current_Residential_Address']; ?>
                          </td>
                          <td>
                            <?php echo $row['Choose_Identity_Card']; ?>
                          </td>
                          <td>
                            <?php echo $row['Enter_Identity_Card_Number']; ?>
                          </td>
                          <td>
                            <?php echo $row['Choose_Organ_Name']; ?>
                          </td>
                          <td>
                            <?php echo $row['Social_Media_Profile_Link']; ?>
                          </td>
                          <td>
                            <?php echo $row['I_Hear_from']; ?>
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