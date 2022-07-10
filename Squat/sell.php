<html>
<head>
<title>sell</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="sell/style.css">
	
	<script>
	
     /* function validate()
        {
            var name,email,mobile;
           name=document.getElementById("nm").value;
            email=document.getElementById("mail").value;
            if(name=="")
            {
                alert("Name is blank");
                document.getElementById("nm").focus();
                return false;
            }
            if(!name.match(/^[\w\W]{5,8}$/))
            {
                alert("User name must be alphabet");
                document.getElementById("nm").focus();
                return false;
            }
            if(email=="")
            {
                alert("email is blank");
                document.getElementById("mail").focus();
                return false;
            }
			if(mobile=="")
            {
                alert("Mobile no. is blank");
                document.getElementById("mob").focus();
                return false;
            }
           if(!unm.match(/^[A-Za-z0-9]+$/))
            {
                alert("Password must be alphabetnumeric");
                document.getElementById("p").focus();
                return false;
            }
        }*/
		function validate()
{
 var name,email,mobile;
 name=document.getElementById("nm").value;
 mobile=document.getElementById("mob").value;
 email=document.getElementById("mail").value;
 if(name=="")
 {
  alert("user name is blank");
  document.getElementById("nm").focus();
  return false;
 }
 
 if(email=="")
 {
  alert("Password is blank");
  document.getElementById("mail").focus();
  return false;
 }
 /*if(mobile=="")
 {
  alert("Password is blank");
  document.getElementById("mob").focus();
  return false;
 }*/
 
}
    </script> 
	<body><form onsubmit="return validate()">
	<section>
        <div class="container">
                      <h1 class="text-center text-capitalize pt-5">SELL</h1>
                      <hr class="w-25 mx-auto pt-5">
     <div class="w-50 mx-auto">
                      <form action="/action_page.php">
        <div class="form-group">
            <label for="name">Your Name:*</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" id="nm" name="name"required pattern=["a-zA-Z"]>
                </div>
                <div class="form-group">
                 <label for="email">E-mail:*</label>
                <input type="email" class="form-control" placeholder="Enter  your E-mail" id="mail"name="email"required>
                    </div>
				<div class="form-group">
                 <label for="mobile">Mobile No.:*</label>
                <input type="email" class="form-control" placeholder="Enter  your mob. no." id="mob"name="mobile"required>
                    </div>
                
				
                <div class="form-group">
                    <label for="add">Address</label>
                        <textarea class="form-control"></textarea>
                        </div>

					
			<div class="container">
			<div class="pics">
        <input type="file" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
        <label for="file-input">
            <i class="fas fa-upload"></i> &nbsp; Choose A Photo
        </label>
        <p id="num-of-files">No Files Chosen</p>
        <div id="images"></div>
    </div></div>
<script src="sell/script.js"></script>


	
           
                <button type="submit" class="btn btn-primary"id="submit">submit</button>
                    </form>
        </div>
        </div>
        </section>
	</body>
	</html>
	