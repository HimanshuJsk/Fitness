<html>
    <head>
        <title>Marcos Fitness</title>
        <!--Css-->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!--js-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!--Favicon-->
	    <link rel="icon" type="image/x-icon" href="Image/31.png">
        <!-- font-awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".schedule-filter li").click(function(){
                    var filterValue = $(this).attr("data-tsfilter");
                    $(".ts-item").removeClass("show");
                    $("." + filterValue).addClass("show");
                    $(this).addClass("active").siblings().removeClass("active");
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $('nav div div ul li a').click(function(){

                    const color = $(this).css("background-color")
                    $('#theme'). css({"background-color":color})
                })
            })
        </script>
    </head>
    <style>
        :root{
            --bgColor:black;
        }
        html {
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
        nav{
            background-color: var(--bgColor);
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

        /* .toggle-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 40px;
            cursor: pointer;
            border-radius: 20px;
            background: #4864ff;
            color: #fff;
            margin-right: 10px;
        }
        .dark-theme {
            background-color: white;
            color: #999;
        } */
        #home{
            height: 700px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-1.jpg);
            /* background-blend-mode: ; */
        }
        .flex-container {
            display: flex;
            background-image: url("Image/Free.jpg");
            color:white;
            background-repeat:no-repeat;
            background-size:cover;
            background-size: 1500px;
        }
        .flex-container > div {
            height:300px;
        }
        .section-heading {
            text-align: center;
            margin-top: 70px;
            margin-bottom: 40px;
        }
        .section-heading h2 {
            font-size: 28px;
            font-weight: 800;
            color: #232d39;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .section-heading h2 em {
            font-style: normal;
            color: #ed563b;
        }

        .section-heading img {
            margin: 20px auto;
        }
        #schedule {
            padding: 0px 0px 90px 0px;
            background-image: url(Image/schedule-bg.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #schedule table {
            width: 100%;
            text-align: center;
            border: 1px solid #fff;
        }
        #schedule table tbody {
            border-top: 1px solid #fff; 
        }
        #schedule table tbody tr {
            border-bottom: 1px solid #fff;
        }
        #schedule table tbody tr td {
            border-right: 1px solid #fff;
            height: 100px;
        }
        #schedule table tr td {
            color: #fff;
            font-size: 13px;
            text-transform: capitalize;
            font-weight: 500;
            letter-spacing: 0.25px;
        }
        .schedule-table.filtering .ts-item {
            opacity: 0;
            transition: all 0.5s;
        }
        .schedule-table.filtering .ts-item.show {
            opacity: 1;
            transition: all 0.5s;
        }
        #schedule .filters {
            margin-bottom: 40px;
        }
        #schedule .filters ul {
            padding: 0;
            text-align: center;
        }
        #schedule .filters ul li {
            list-style: none;
            display: inline;
            cursor: pointer;
            position: relative;
            margin-right: 10px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            text-transform: capitalize;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        #schedule .filters ul li:after {
            content: "/";
            margin-left: 10px;
            color: #fff;
        }
        #schedule .filters ul li:last-child {
            margin-right: 0px;
        }
        #schedule .filters ul li:last-child::after {
            display: none;
        }
        #schedule .filters ul li.active,
        #schedule .filters ul li:hover {
            color: #ed563b;
        }
        #schedule .filters-content {
            margin-top: 50px;
        }
        #schedule .filters-content .show {
            opacity: 1;
            visibility: visible;
            transition: all 350ms;
        }
        #schedule .filters-content .hide {
            opacity: 0;
            visibility: hidden;
            transition: all 350ms;
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
            text-decoration: none;
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
    <body class="light-theme">
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
                        <li class="nav-item Active">
                            <a class="nav-link  " aria-current="page" href="marcos.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php" style="text-decoration:none">Health</a>
                            <a class="dropdown-item" href="login.php" style="text-decoration:none">Video</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link " href="product.php">Product</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">Contact Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="" class="btn bg-light" id="theme">White</a>
                        </li> -->
                        <!-- <div class="toggle-btn">
                            <span>Dark</span>
                            <img src="Image/moon.png" alt="dw" style="width:25px; margin-left:10px;">
                        </div> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="text-decoration:none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user fa-xl"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="login.php" style="text-decoration:none;">Login</a>
                                <a class="dropdown-item" href="signup.php" style="text-decoration:none;">Signup</a>
                            </div>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--Header area end-->
        <div class="d-flex flex-column " id="home">
            <div class="justify-content-end" style="margin-top:150px; margin-left:800px;">
                <p class="text-light" style="font-size:30px;">SHAPE YOUR BODY</p>
                <h1 class="text-light" style="font-size:30px;">BE <span class="" style="color:darkorange;">STRONG</span></h1>
                <h1 class="text-light" style="font-size:px;">TRANING HARD</h1>
                <button class="text-light mt-3" style="background-color:darkorange; width:150; height:50; font-size:20px; border-radius:5px;"><a class="text-light" href="index.php" style="text-decoration:none;">Get Info</a></button>
            </div>
        </div>
        <br>
        <div class="flex-container">
            <div class="w-100 text-center pt-4">
                <h2>Exclusive Discount</h2>
                <p class="pt-2 pb-2">Get free membership today and contact fitness, order to<br>
                    pick up fitness related products and contact fast. <br>The free membership offer 
                    is only for a limited time <br>so avail the offer quickly.</p>
                <a href="index.php"><button class="btn btn-link pb-2" style="text-decoration:none; color:white; font-size:20px; border:2px solid white;">Become A Member</button></a>
            </div>  
        </div>
        <!--Classes Schedule area start-->
        <section class="section text-light" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading dark-bg">
                            <h2 class="text-light">Classes <em>Schedule</em></h2>
                            <img src="assets/images/line-dec.png" alt="">
                            <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filters">
                            <ul class="schedule-filter">
                                <li class="active" data-tsfilter="monday">Monday</li>
                                <li data-tsfilter="tuesday">Tuesday</li>
                                <li data-tsfilter="wednesday">Wednesday</li>
                                <li data-tsfilter="thursday">Thursday</li>
                                <li data-tsfilter="friday">Friday</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="schedule-table filtering">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="day-time">Fitness Class</td>
                                        <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                        <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                        <td>William G. Stewart</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Muscle Training</td>
                                        <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                        <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                        <td>Paul D. Newman</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Body Building</td>
                                        <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                        <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                        <td>Boyd C. Harris</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Yoga Training Class</td>
                                        <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                        <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                        <td>Hector T. Daigle</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Advanced Training</td>
                                        <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                        <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                        <td>Bret D. Bowers</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Classes Schedule area end-->
        <!--Main area end-->
        <a href="#" class="to-top text-decoration-none text-black">
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