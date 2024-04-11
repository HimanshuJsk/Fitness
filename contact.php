<?php
?>
<html>
    <head>
        <title>Contact form</title>
        <!--Css-->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
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
                var name = document.cform.name.value;
                var email=document.cform.email.value;  
                var atposition=email.indexOf("@");  
                var dotposition=email.lastIndexOf("."); 
                var message = document.cform.message.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                }
                else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
                    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                    return false;  
                } 
                else if (message == null || message == "") {
                    alert("Message can't be blank");
                    return false;
                } 
            }
	    </script>
        <!-- <script type="text/javascript">
            if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
        </script> -->
    </head>
    <style>
        html{
            scroll-behavior: smooth;
        }
        .nav-item a:hover{
            text-decoration: underline orangered;
            /* color: orangered; */
        }
        .dropdown-item:hover{
            background-color:red;
            color:white;
        }
        #fname:hover{
            text-decoration: underline orangered;
        }
        #contact{
            height: 450px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #contact h1{
            font-size: 80px;
        }
        .flex-container {
            display: flex;
            background-color: black;
            border:10px solid white;
        }

        .flex-container > div {
            background-color: #f1f1f1;
            margin:5px;
            padding: 20px;
            width: 50%;
            height:560px;
        }
        form{
            /* margin-top:50px; */
            padding-top: 40px;
            padding-right: 60px;
            padding-bottom: 40px;
            padding-left: 60px;
        }
        footer a{
            text-decoration:underline;
        }
        .to-top {
            background: white;
            position: fixed;
            bottom: 16px;
            right:32px;
            width:40px;
            height:40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size:25px;
            color:#1f1f1f;
            opacity:0;
            pointer-events: none;
            transition: all .4s;
        }

        .to-top.active {
            bottom:32px;
            pointer-events: auto;
            opacity:1;
        }
    </style>
    <body>
        <!--Header area start-->
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:black;">
            <div class="container-fluid">
                <a href="index.php"><img src="Image/31.png" alt="" style="height: 60px;"></a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="class.php">Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="service.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="team.php">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="product.php">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="health.php" style="text-decoration:none">Health</a>
                            <a class="dropdown-item" href="video.php" style="text-decoration:none">Video</a>
                            </div>
                        </li>
                        <li class="nav-item Active">
                            <a class="nav-link " href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--Header area end-->
        <!--Image area start-->
            <div class="d-flex justify-content-center align-items-center flex-column" id="contact">
                    <h1 style="font-size: px;" class="text-light " >Contact us</h1>
            </div>
        <!--Image area end-->
        <!--Main area Start-->
        <div class="flex-container">
            <div>
            <iframe
				src=""
				width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <div class="form-container">
                    <form name="cform" style="background-color:lightblue;" method="post" onsubmit="return validateform()" 
                    style="background-color:">
                        <h2 style="text-align:center;"><u>Contact us</u></h2>
                        <br>
                        <label for="name" style="font-size:15px;">Name:</label>
                        <input type="text" class="form-control" Placeholder="Name" name="name">
                        <br>
                        <label for="email" style="font-size:15px;">Email:</label>
                        <input type="email" class="form-control" Placeholder="abc@gmail.com" name="email">
                        <br>
                        <label for="message" style="font-size:15px;">Message:</label>
                        <textarea id="message" class="form-control" Placeholder="Message" name="message"></textarea>
                        <br>
                        <input class="mb-3" type="checkbox" name="remember">Remember Me
                        <button type="submit" class="btn btn-primary btn-block" value="submit" name="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <!--Main area End-->
        <a href="#" class="to-top text-decoration-none text-black" style="text-decoration:none; color:black;">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!--Footer area start-->
        <footer>
            <p style="color:white; text-align: center; background-color: black; padding: 15px 0;">Copyright &copy; 
        2024 Developed by <a href="index.php" id="fname" style="color: white; text-decoration:;">Marcos Fitness</a></p>
        </footer>
        <!--Footer area end-->
        <script>
            const toTop = document.querySelector(".to-top");

            window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } else {
                toTop.classList.remove("active");
            }
            })
        </script>
    </body>
</html>