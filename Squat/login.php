<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SQUAT</title>
    <link rel="icon" href="image/logo.png" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .login-dark {
            height: 1000px;
            background-size: cover;
            position: relative;
        }

        body {
            background: #222D32;
            font-family: 'Roboto', sans-serif;
        }

        .login-dark form {
            max-width: 320px;
            width: 90%;
            background: #1A2226;
            padding: 40px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
            box-shadow: 3px 3px 4px rgba(0, 0, 0, 0.2);
        }

        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }

        .login-dark form .form-control {
            background: none;
            border: none;
            border-bottom: 1px solid #434a52;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
        }

        .login-dark form .btn-primary {
            background: #214a80;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }

        .login-dark form .btn-primary:hover,
        .login-dark form .btn-primary:active {
            border-color: #0DB8DE;
            color: #0DB8DE;
            outline: none;
        }

        .login-dark form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .login-dark form .forgot:hover,
        .login-dark form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }

        .login-dark form .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
    <script>
        /* function validate()
        {
            var unm,pnm;
            unm=document.getElementById("u").value;
            pnm=document.getElementById("p").value;
            if(unm=="")
            {
                alert("Name is blank");
                document.getElementById("u").focus();
                return false;
            } */
            /*if(!unm.match(/^[\w\W]{5,8}$/))
            {
                alert("User name must be alphabet");
                document.getElementById("u").focus();
                return false;
            }*/
            /* if(pnm=="")
            {
                alert("Password is blank");
                document.getElementById("p").focus();
                return false;
            } */
           /* if(!unm.match(/^[A-Za-z0-9]+$/))
            {
                alert("Password must be alphabetnumeric");
                document.getElementById("p").focus();
                return false;
            }*/
       /*  } */
    </script>
</head>

<body>
    <div class="login-dark" style="height: 695px;">
        <form onsubmit="return validate();" action="code.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <i class="icon ion-ios-locked-outline"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" id="u" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="p" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" name="login_btn">Log In</button>
            </div>
            <a class="forgot" href="forgetpassword.php">Forgot your email or password?</a>
            <br>
            <a class="forgot" href="signup.php">Create an account?</a>

        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>