<html>
    <head>
        <title>Health</title>
        <!--Css-->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            overflow-x:hidden;
            /* transition: background-color 0.5s; */
        }
        .toggle-btn button {
            background-color: #4864ff; /* Change this to the desired color */
            color: #fff; /* Change this to the desired text color */
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
        #health{
            height: 450px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #health h1{
            font-size: 80px;
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
                        <li class="nav-item ">
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
                        <!-- <button id="theme-toggle">Toggle Theme</button> -->
                        <!-- <div class="toggle-btn">
                            <span>Dark</span>
                            <img src="Image/moon.png" alt="dw" style="width:25px; margin-left:10px;">
                        </div> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="text-decoration:none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user fa-xl"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="logout.php" style="text-decoration:none;">Logout</a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
        </nav>
        <!--Header area end-->
        <!--Main area start-->
        <!--Image area start-->
        <div class="d-flex justify-content-center align-items-center flex-column" id="health">
                    <h1 style="font-size: px;" class="text-light " >Health</h1>
            </div>
        <!--Image area end-->
        <div class="d-flex pl-4 pr-4">
            <div class="row row-cols-1 row-cols-md-4 g-4 py-5 justify-content-center">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="d-flex card border border-dark">
                <img src="Image/cgym.jpg" class="card-img-top border-bottom border-dark" style="height:200;" id="it" alt="...">
                <div class="card-body">
                    <h5 class="card-title">A seven-year-old boy</h5>
                    <p class="card-text pb-5">For a 7-year-old boy, focus on fun physical activities like bike riding, swimming, or playing sports. Encourage active play, limit screen time, and ensure a balanced diet for overall health.</p>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class=" d-flex card border border-dark">
                <img src="Image/thinman.jpg" class="card-img-top border-bottom border-dark" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Thin man</h5>
                    <p class="card-text pb-4">For a thin man looking to improve fitness, focus on a balanced approach. Include strength training to build muscle, incorporate cardiovascular exercises for overall health, and maintain a nutritious diet with adequate protein.</p>
                </div>
                </div>
            </div>
            <div class="d-flex col-12 col-md-4 col-lg-3">
                <div class="card border border-dark">
                <img src="Image/fman.jpg" class="card-img-top border-bottom border-dark" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fat man</h5>
                    <p class="card-text">For a man looking to improve fitness and manage weight, prioritize a combination of regular exercise and a healthy diet. Include both cardio and strength training exercises to burn calories and build muscle.</p>
                </div>
                </div>
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
        2024 Developed by <a href="index.php" id="fname" style="color: white;">Marcos Fitness</a></p>
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