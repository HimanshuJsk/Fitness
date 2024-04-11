<html>
    <head>
        <title>Team</title>
        <!--Css-->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
        #team{
            height: 450px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #team h1{
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
                        <li class="nav-item Active">
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
        <div class="d-flex justify-content-center align-items-center flex-column" id="team">
                    <h1 style="font-size: px;" class="text-light " >Team</h1>
            </div>
        <!--Image area end-->
        <!-- Testimonials Carousel area start-->
        <section class="testimonial-section mt-5">
            <div class="container">
                <h2 class="text-center mb-3">Client Testimonials</h2>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Testimonial 1 -->
                        <div class="carousel-item active">
                            <p class="text-center">"I love the personalized training sessions. The trainers <br>are knowledgeable
                                and friendly."</p>
                            <p class="text-center"><strong>- Parth</strong></p>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="carousel-item">
                            <p class="text-center">"The nutrition advice I received here has made a significant <br>difference in
                                my health and fitness."</p>
                            <p class="text-center"><strong>- Harsh</strong></p>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <p class="text-center">"Attending yoga classes here has brought a sense of peace and <br>balance to my
                                life."</p>
                            <p class="text-center"><strong>- Solanki</strong></p>
                        </div>
                    </div>
                    <button class="carousel-control-prev btn btn-secondary text-light" type="button" style="border:2px solid black;" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next btn btn-secondary text-light" type="button" style="border:2px solid black;" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Testimonials Carousel area end-->
        <!-- Team Section area start-->
        <section class="team-section mt-3">
            <div class="container">
                <h2 class="text-center mb-4">Our Team</h2>
                <div class="row justify-content-center align-items-center">
                    <!-- Team Member 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Parm</h5>
                                <p class="card-text">Fitness Trainer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Parm</h5>
                                <p class="card-text">Nutritionist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section area end-->
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