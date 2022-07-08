<?php
if(isset($_POST['submit']))
{
  $mobile=$_POST['mobile'];
  $message=$_POST['message'];
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SMS </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
  <h2 class="text-center">SMS Form</h2>
  <form class="form-horizontal" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Mobile">Mobile Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Message">Message</label>
    <div class="col-sm-10">
      <textarea name="message" class="form-control" placeholder="Enter Message. . ."></textarea>
    </div>
  </div><br>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="" class="btn btn-danger">Submit</button>
    </div>
  </div>
</form>
  </div>
</body>
</html>