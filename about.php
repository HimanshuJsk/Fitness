<html>
    <head>
        <title>About us</title>
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
        #about{
            height: 500px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #about h1{
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
        @media only screen (min-width: 1192px) {
            .card{
                height:550px;
            }
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
                        <li class="nav-item Active">
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
        <div class="d-flex justify-content-center align-items-center flex-column " id="about">
                <h1 style="font-size: px;" class="text-light " >About us</h1>
        </div>
        <div class="d-flex pl-4 pr-4">
            <div class="row row-cols-1 row-cols-md-4 g-4 py-5">
            <div class="col">
                <div class="card border border-dark">
                <img src="Image/gallery-2.jpg" class="card-img-top" id="it" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dumbbells</h5>
                    <p class="card-text">Dumbbells are versatile weights used for strength training. They come in various types, materials, and weights. Commonly used for exercises like curls and presses, they aid in building muscle and promoting overall fitness.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-dark">
                <img src="Image/gallery-3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Treadmill</h5>
                    <p class="card-text pb-5">A treadmill is a cardio exercise machine with a moving belt. Users walk, or run on it, adjusting speed and incline for intensity.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-dark">
                <img src="Image/gallery-4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pushup</h5>
                    <p class="card-text pb-4">for a quick guide on push-ups, start in a plank position, lower your body by bending elbows, then push back up. Keep a straight line from head to heels.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-dark">
                <img src="Image/gallery-5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Barbell</h5>
                    <p class="card-text pb-3">Barbell workouts typically involve lifting a weighted bar with added plates for strength training. Exercises include squats, deadlifts, and bench presses, targeting various muscle groups.</p>
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