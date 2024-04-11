<html>
    <head>
        <title>Service</title>
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
        <script>
            function validateform() {
                var errors = "";

                var name = document.membership.name.value;
                var email = document.membership.email.value;
                var atposition = email.indexOf("@");
                var dotposition = email.lastIndexOf(".");
                var membershipplan = document.membership.membershipplan.value;
                var cardnumber = document.membership.cardnumber.value;
                var expirydate = document.membership.expirydate.value;

                // Validate Name
                if (name == null || name === "") {
                    errors += "Name can't be blank\n";
                }

                // Validate Email
                if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
                    errors += "Please enter a valid e-mail address\n";
                }

                // Validate Membership Plan
                if (membershipplan === "") {
                    errors += "Please select a Membership Plan\n";
                }

                // Validate Card Number
                if (cardnumber.length !== 16) {
                    errors += "Credit Card Number should be of 16 digits!\n";
                }
                
                // Validate Expiry Date
                if (expirydate === "" || new Date(expirydate) < new Date()) {
                        errors += "Please enter a valid expiry date\n";
                    }

                // Display errors if any
                if (errors !== "") {
                    alert(errors);
                    return false;
                }

                // Form is valid, continue with submission
                return true;

            }
        </script>

        <!-- <script>
            function validateform() {
                var name = document.membership.name.value;
                var email=document.membership.email.value;  
                var atposition=email.indexOf("@");  
                var dotposition=email.lastIndexOf("."); 
                var membershipPlan = document.membership.membershipplan.value;
                var cardnumber = document.membership.cardnumber.value;
                var cvv = document.membership.cvv.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                }
                else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
                    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                    return false;  
                }
                else if (membershipPlan == "") { 
                    alert("Please select a Membership Plan");
                    return false;
                }
                else if (cardnumber.length != 16) {
                    alert("Credit Card Number should be of 16 digits!");
                    return false;
                }
                else if (cvv.length != 3) {
                    alert("CVV Number should be of 3 digits!");
                    return false;
                }
            }
        </script> -->
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
        #service{
            height: 450px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #service h1{
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
                        <li class="nav-item Active">
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
        <div class="d-flex justify-content-center align-items-center flex-column" id="service">
                    <h1 style="font-size: px;" class="text-light " >Service</h1>
            </div>
        <!--Image area end-->
        <section id="services" class="py-5">
            <div class="container">
                <h2 class="text-center pb-3">Our Services</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow ">
                            <img  src="Image/Service1.jpeg" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title text-center ">Fitness Equipment</h5>
                                <p class="card-text">
                                <p class="text-capitalize fw-bold text-center  ">State-of-the-art cardiovascular machines</p>
                                <p class="text-capitalize fw-bold text-center  ">Diverse strength training equipment</p>
                                <p class="text-capitalize fw-bold text-center  ">Free weights and resistance machines</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class=" shadow ">
                            <img src="Image/Service2.jpeg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title text-center ">Personalized Training</h5>
                                <p class="card-text">
                                <p class="text-capitalize fw-bold text-center  ">Personal training with certified trainers</p>
                                <p class="text-capitalize fw-bold text-center  ">Customized workout plans tailored to individual goals</p>
                                <p class="text-capitalize fw-bold text-center  ">Fitness assessments and consultations</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  ">
                        <div class="card shadow ">
                            <img src="Image/Service3.jpg" class="card-img-top" alt="Service 3">
                            <div class="card-body">
                                <h5 class="card-title text-center ">Expertised Classes</h5>
                                <p class="card-text">
                                <p class="text-capitalize fw-bold text-center  ">Varied group fitness classes</p>
                                <p class="text-capitalize fw-bold text-center  ">Certified instructors providing guidance</p>
                                <p class="text-capitalize fw-bold text-center  ">Regularly updated class schedule</p>                            </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="plans" class="container py-2">
            <h2 class="text-center py-3">Our Plans</h2>
            <div class="row row-cols-1  row-cols-md-3 d-flex text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-lg">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-bolder ">3 Month Limited</h4>

                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">3000 ₹<small
                                        class="text-body-secondary fw-light">/month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="fs-4 py-2">Free Riding</li>
                                    <li class="fs-4 py-2">limited Equipments</li>
                                    <li class="fs-4 py-2">No Pesonal Trainer</li>
                                    <li class="fs-4 py-2">Weight-Loss Classes </li>
                                    <li class="fs-4 py-2">Time Restriction</li>
                                    <li class="fs-4 py-2">No Protien Supplement</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Become A Member</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-lg">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-bolder ">6 Month Unlimited</h4>

                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">6000 ₹<small
                                        class="text-body-secondary fw-light">/month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="fs-4 py-2">Free Riding</li>
                                    <li class="fs-4 py-2">Unlimited Equipments</li>
                                    <li class="fs-4 py-2">Pesonal Trainer</li>
                                    <li class="fs-4 py-2">Weight-Loss Classes </li>
                                    <!-- <li class="fs-4 py-2">No Time Restriction</li> -->
                                    <li class="fs-4 py-3">Limited Protien Supplement</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Become A Member</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-lg">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-bolder ">12 Month Unimited</h4>

                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">9000 ₹<small
                                        class="text-body-secondary fw-light">/month</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li class="fs-4 py-2">Free Riding</li>
                                    <li class="fs-4 py-2">Unlimited Equipments</li>
                                    <li class="fs-4 py-2">Pesonal Trainer</li>
                                    <li class="fs-4 py-2">Weight-Loss Classes </li>
                                    <!-- <li class="fs-4 py-2">No Restriction</li> -->
                                    <li class="fs-4 py-3">Unlimited Protien Supplement</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Become A Member</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body ">
                    <div style="width: 500px;" class="container  p-5 rounded-1   " >
                        <h2 class="mb-4 text-center ">Marcos Membership </h2>
                        
                        <form name="membership" method="post" onsubmit="return validateform()">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="mt-2">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" >
                        </div>
                    
                        <div class="form-group">
                            <label for="membershipPlan" class="mt-3">Select Membership Plan:</label>
                            <select class="form-control" id="membershipPlan" name="membershipplan" >
                            <option value="3">3 Months - $3000</option>
                            <option value="6">6 Months - $6000</option>
                            <option value="12">12 Months - $9000</option>
                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="cardNumber" class="mt-3">Credit Card Number:</label>
                            <input type="text" class="form-control" id="cardnumber" name="cardnumber" >
                        </div>
                    
                        <div class="form-group">
                            <label for="expiryDate" class="mt-3">Expiry Date:</label>
                            <input type="date" class="form-control" id="expirydate" name="expirydate" title="Please select the expiry date" >
                        </div>

                        <button type="submit" class="btn btn-primary form-control" value="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
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