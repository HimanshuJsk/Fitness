<?php
	include 'connect.php';

	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$result=mysqli_query($con, "SELECT * FROM signup WHERE email='$email'");
		$row=mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0){
			if($password == $row["password"]){
				$_SESSION["login"]=true;
				$_SESSION["id"]=$row["id"];
				echo"<script> alert('Login Successfully')</script>";
				header("Location: index.php");
			}
			else{
				echo"<script> alert('Wrong Password'); </script>";
			}
		}
		else{
			echo"<script> alert('User Not Registered'); </script>";
		}	
	}
?>
<html>
    <head>
    <title>Login Form</title>
        <!--Css-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--js-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!--Favicon-->
	    <link rel="icon" type="image/x-icon" href="Image/31.png">
        <!-- font-awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script>
            function validateform() {
                var email=document.loginform.email.value;  
                var atposition=email.indexOf("@");  
                var dotposition=email.lastIndexOf("."); 
                var password = document.loginform.password.value;
                if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
                    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                    return false;  
                } 
                else if (password.length != 6) {
                    alert("Password must be at least 6 characters long.");
                    return false;
                }
            }
        </script>
    </head>
    <style>
        body{

        }
        #myVideo{
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%; 
            min-height: 100%;
            background: rgba(48,25,52,0.75);
        }
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }
        form p:hover{
            color:blue;
        }
        @media (min-width: 768px) {
            .gradient-form {
            height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
            }
        }
    </style>
    <body>
        <script>alert("login first to access all pages")</script>
        <video autoplay muted loop id="myVideo">
        <source src="Image/gym-video.mp4" type="video/mp4">
        </video>
        <!-- <div class="container">
            <div class="form-container">

            </div>
        </div> -->
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                            <!-- <div class="text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                            </div> -->

                            <form name="loginform" method="post" onsubmit="return validateform()">
                                <p style="font-size:19px; justify-content:center; text-align:center;">Please login to your account</p>
                                <label for="email" style="font-size:17px;">E-mail</label>
                                <input type="email" class="form-control" name="email" Placeholder="abc@gmail.com">
                                <br>
                                <label for="password" style="font-size:17px;">Password</label>
                                <input type="password" class="form-control" name="password" Placeholder="* * * * * *">
                                <br>
                                <input type="checkbox" name="remember" class="mb-3">Remember Me 
                                <button type="submit" class="btn btn-primary btn-block gradient-custom-2 " name="submit" value="submit">Login</button>
                                <br>
                                <a href="" style="text-decoration:none;" class="btn btn-light btn-block border border-primary">
                                <img src="Image/google.png" style="width:20px;"> Sign in with Google</a>
                                <!-- <a href="https://www.google.com/" style="text-decoration:none;">
                                    <button class="btn btn-light btn-block" style="border-color: blue;"><img src="Image/google.png" style="width:20px;">
                                    <small> Sign in with Google</small></button></a> -->
                            </form>
                        </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <h2 class="mb-4">Marcos Fitness</h2>
                            <p class="small mb-0" style="font-size:17px;">To Visit Marcos Fitness First Sign up then Login and Book Marcos Fitness Visit and Class. Join Marcos Fitness instantly by Booking a Class.</p>
                            <br>
                            <!-- <button class="btn btn-light btn-block">Get info</button> -->
                            <a href="marcos.php" class="btn btn-light btn-block">Get info</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </body>
</html>