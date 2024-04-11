<html>
    <head>
        <title>Class</title>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
    </head>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body{
            overflow-x:hidden;
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
        #class{
            height: 500px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #class h1{
            font-size: 80px;
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
        #our-classes {
            margin-bottom: 50px;
        }

        #tabs ul {
            margin: 0;
            padding: 0;
        }
        #tabs ul li {
            margin-bottom: 30px;
            display: inline-block;
            width: 100%;
        }
        #tabs ul li:last-child {
            margin-bottom: 0px;
        }
        #tabs ul li a {
            text-transform: capitalize;
            width: 100%;
            padding: 30px 30px;
            display: inline-block;
            background-color: #fff;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            border-radius: 5px;
            font-size: 19px;
            color: #232d39;
            letter-spacing: 0.5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        #tabs .main-button a {
            text-align: center;
            padding: 20px 30px;
            width: 30%;
            border-radius: 5px;
            display: inline-block;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            color: #fff;
            font-size: 19px;
            letter-spacing: 0.5px;
            font-weight: 600;
            background-color: #ed563b;
        }
        #tabs .main-rounded-button a {
            text-align: center;
            padding: 20px 30px;
            width: 100%;
            border-radius: 5px;
            display: inline-block;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            color: #fff;
            font-size: 19px;
            letter-spacing: 0.5px;
            font-weight: 600;
            background-color: #ed563b;
        }
        #tabs .main-rounded-button a:hover {
            background-color: #f9735b;
        }
        #tabs ul li a img {
            max-width: 100%;
            margin-right: 20px;
        }
        #tabs ul .ui-tabs-active span {
            background: #faf5b2;
            border: #faf5b2;
            line-height: 90px;
            border-bottom: none;
        }
        #tabs ul .ui-tabs-active a {
            color: #ed563b;
        }
        #tabs ul .ui-tabs-active span {
            color: #1e1e1e;
        }
        .tabs-content {
            margin-left: 30px;
            text-align: left;
            display: inline-block;
            transition: all 0.3s;
        }
        .tabs-content img {
            max-width: 100%;
            overflow: hidden;
            border-radius: 5px;
        }
        .tabs-content h4 {
            font-size: 23px;
            font-weight: 700;
            color: #232d39;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            margin-top: 30px;
        }
        .tabs-content p {
            font-size: 14px;
            color: #7a7a7a;
            margin-bottom: 28px;
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
        @media (max-width: 992px) {
            #our-classes .tabs-content {
                margin-left: 0px;
                margin-top: 30px;
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
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About Us</a>
                        </li>
                        <li class="nav-item Active">
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
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--Header area end-->
        <!--Main area start-->
        <!--Our Classes area start-->
        <div class="d-flex justify-content-center align-items-center flex-column " id="class">
                <h1 style="font-size: px;" class="text-light " >Class</h1>
        </div>
        <section class="section" id="our-classes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>Our <em>Classes</em></h2>
                            <img src="Image/i2.png" alt="">
                            <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                        </div>
                    </div>
                </div>
                <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                    <li><a href='#tabs-1' style="text-decoration:none;"><img src="Image/tabs-first-icon.png" alt="">First Training Class</a></li>
                    <li><a href='#tabs-2' style="text-decoration:none;"><img src="Image/tabs-first-icon.png" alt="">Second Training Class</a></a></li>
                    <li><a href='#tabs-3' style="text-decoration:none;"><img src="Image/tabs-first-icon.png" alt="">Third Training Class</a></a></li>
                    <li><a href='#tabs-4' style="text-decoration:none;"><img src="Image/tabs-first-icon.png" alt="">Fourth Training Class</a></a></li>
                    <div class="main-rounded-button"><a href="#" style="text-decoration:none;">View All Schedules</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="Image/training-image-01.jpg" alt="First Class">
                        <h4>First Training Class</h4>
                        <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                        <div class="main-button pb-5">
                            <a href="#" style="text-decoration:none;">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <img src="Image/training-image-02.jpg" alt="Second Training">
                        <h4>Second Training Class</h4>
                        <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <div class="main-button pb-5">
                            <a href="#" style="text-decoration:none;">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <img src="Image/training-image-03.jpg" alt="Third Class">
                        <h4>Third Training Class</h4>
                        <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                        <div class="main-button pb-5">
                            <a href="#" style="text-decoration:none;">View Schedule</a>
                        </div>
                    </article>
                    <article id='tabs-4'>
                        <img src="Image/training-image-04.jpg" alt="Fourth Training">
                        <h4>Fourth Training Class</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                        <div class="main-button">
                            <a href="#" style="text-decoration:none;">View Schedule</a>
                        </div>
                    </article>
                    </section>
                </div>
                </div>
            </div>
        </section>
        <!--Our Classes area end-->
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