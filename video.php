<html>
    <head>
        <title>Video</title>
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>
    <style>
        html{
            scroll-behavior: smooth;
        }
        html,body{
            overflow-x: hidden;
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
        #video{
            height: 500px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #video h1{
            font-size: 80px;
        }
        /* .flex-container {
            display: flex;
            background-color: DodgerBlue;
        } */
        /* .flex-container > div {
            background-color: #f1f1f1;
            margin: 2px;
            padding: 10px;
            height:300px;
            width:50%;
            font-size: 30px;
        } */
        .video-container {
            height: 51vh;
        }
        .embed-responsive {
            width: 100%;
        }
        .embed-responsive video {
            /* height:55px; */
            max-width: 100%;
        }
        /* .contain-container{
            width:20%;
        } */
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
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black;">
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
                        <li class="nav-item Active dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="health.php" style="text-decoration:none">Health</a>
                            <a class="dropdown-item" href="video.php" style="text-decoration:none">Video</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link " href="product.php">Product</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--Header area end-->
        <!--Main area start-->
        <div class="d-flex justify-content-center align-items-center flex-column " id="video">
                <h1 style="font-size: px;" class="text-light " >Video</h1>
        </div>
        <div class="d-flex bd-highlight mt-3 border border-dark v-container">
            <div class="p-2 flex-fill bd-highlight border border-dark">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls autoplay muted>
                        <source src="Image/Fivideo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="flex-fill bd-highlight border border-dark">
                <h3 class="text-center mt-3" style="text-decoration:underline;">Core</h3>
                <!-- <p>Raised Glute Bridges</p> -->
                <div class="container" style="font-size:20px;">
                    <p class="">Raised Glute Bridges</p>
                    <p class="">Walking Glute Bridges</p>
                    <p class="">Plank Step-Ups</p>
                    <!-- <p class="">Plank Step Jacks</p>
                    <p class="">Side Plank With Rear Taps</p> -->
                </div>
            </div>
        </div>
        <div class="d-flex bd-highlight mt-3 border border-dark v-container">
            <div class="flex-fill bd-highlight border border-dark">
                <h3 class="text-center mt-3" style="text-decoration:underline;">Strength</h3>
                <!-- <p>Raised Glute Bridges</p> -->
                <div class="container" style="font-size:20px;">
                    <p class="">Alternating Transverse To Reverse Lunge</p>
                    <p class="">Bulgarian Split Squat Mini Hpos</p>
                    <p class="">Lateral Tow Dips</p>
                    <!-- <p class="">Negative Pistol Squat</p>
                    <p class="">Single Leg Transverse Lunge</p> -->
                    <!-- <p class="">Triceps Push-up</p>
                    <p class="">Offset Push-up</p> -->
                </div>
            </div>
            <div class="p-2 flex-fill bd-highlight border border-dark">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls autoplay muted>
                        <source src="Image/svideo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="d-flex bd-highlight mt-3 border border-dark v-container">
            <div class="p-2 flex-fill bd-highlight border border-dark">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls autoplay muted>
                        <source src="Image/Tvideo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="flex-fill bd-highlight border border-dark">
                <h3 class="text-center mt-3" style="text-decoration:underline;">Cardio</h3>
                <!-- <p>Raised Glute Bridges</p> -->
                <div class="container" style="font-size:20px;">
                    <p class="">Jump Up to Step Down</p>
                    <p class="">Burpees With Step Jump</p>
                    <p class="">180 Jump To Hurdle Jumps</p>
                    <!-- <p class="">Flxed Lateral Bench Jumps</p>
                    <p class="">Lateral Straddling Toe Taps</p> -->
                </div>
            </div>
        </div>
        <div class="d-flex bd-highlight mt-3 border border-dark v-container">
            <div class="flex-fill bd-highlight border border-dark">
                <h3 class="text-center mt-3" style="text-decoration:underline;">Cool-Down</h3>
                <!-- <p>Raised Glute Bridges</p> -->
                <div class="container" style="font-size:20px;">
                    <p class="">Raised Pigeon Stretch</p>
                    <p class="">Quadriceps And Psoas Stretch</p>
                    <p class="">Adductor Stretch</p>
                    <!-- <p class="">Triceps Push-up</p>
                    <p class="">Offset Push-up</p> -->
                </div>
            </div>
            <div class="p-2 flex-fill bd-highlight border border-dark">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls autoplay muted>
                        <source src="Image/Fvideo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <!--Main area end-->
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