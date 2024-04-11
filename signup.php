<?php
	include 'connect.php';

	if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $mobileno = $_POST['mobileno'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $password = $_POST['password'];

        // Check if email already exists
        $email_check_query = "SELECT * FROM `signup` WHERE email='$email' LIMIT 1";
        $result = mysqli_query($con, $email_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            echo "<script>alert('Email already exists');</script>";
        } else {
            // Insert user details into database
            $sql = "INSERT INTO `signup` (name,address,email,mobileno,gender,age,weight,height,password)
                    VALUES ('$name','$address','$email','$mobileno','$gender','$age','$weight','$height','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<script>alert('Sign-Up Successfully');</script>";
            } else {
                die(mysqli_error($con));
            }
        }
    }
?>

<html>
    <head>
        <title>Sign up Form</title>
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
                var name = document.signupform.name.value;
                var address = document.signupform.address.value;
                var email=document.signupform.email.value;  
                var atposition=email.indexOf("@");  
                var dotposition=email.lastIndexOf("."); 
                var mobileno = document.signupform.mobileno.value;
                var genderMale = document.signupform.gender[0].checked;
                var genderFemale = document.signupform.gender[1].checked;
                var age = document.signupform.age.value;
                var weight = document.signupform.weight.value;
                var height = document.signupform.height.value;
                var password = document.signupform.password.value;
                if (name == null || name == "") {
                    alert("Name can't be blank");
                    return false;
                }
                else if (address == null || address == "") {
                    alert("Address can't be blank");
                    return false;
                } 
                else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
                    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                    return false;  
                } 
                else if (mobileno.length != 10) {
                    alert("mobile number should be of 10 digits!");
                    return false;
                }
                else if (!genderMale && !genderFemale) {
                    alert("Please select a gender");
                    return false;
                }
                else if (age == null || age == "") {
                    alert("Age can't be blank");
                    return false;
                } 
                else if (weight == null || weight == "") {
                    alert("Weight can't be blank");
                    return false;
                } 
                else if (height == null || height == "") {
                    alert("Height can't be blank");
                    return false;
                } 
                else if (password.length < 6) {
                    alert("Password must be at least 6 characters long.");
                    return false;
                }
            }
	    </script>
    </head>
    <style>
        body{
            background-image: url("Image/contact-bg.jpg");
            color:white;
            background-repeat:no-repeat;
            background-size:cover;
        }
        .form-container {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        form {
            /* width: 100%; */
            background-color:white;
            color:black;
            margin-top:50px;
            padding-top: 40px;
            padding-right: 60px;
            padding-bottom: 40px;
            padding-left: 60px;
            position: relative;
            overflow: hidden;
            border-top: 1px solid rgba(255, 49, 49, 0.5);
            border-right: 1px solid rgba(0, 255, 255, 0.5);
            border-bottom: 1px solid rgba(57, 255, 20, 0.5);
            border-left: 1px solid rgba(255, 255, 113, 0.5);
        }
        span {
            position: absolute;
            border-radius: 100vmax;
        }
        .top {
            top: 0;
            left: 0;
            width: 0;
            height: 5px;
            background: linear-gradient(
                90deg,
                transparent 50%,
                rgba(255, 49, 49, 0.5),
                rgb(255, 49, 49)
            );
        }
        .bottom {
            right: 0;
            bottom: 0;
            height: 5px;
            background: linear-gradient(
                90deg,
                rgb(57, 255, 20),
                rgba(57, 255, 20, 0.5),
                transparent 50%
            );
        }

        .right {
            top: 0;
            right: 0;
            width: 5px;
            height: 0;
            background: linear-gradient(
                180deg,
                transparent 30%,
                rgba(0, 255, 255, 0.5),
                rgb(0, 255, 255)
            );
        }

        .left {
            left: 0;
            bottom: 0;
            width: 5px;
            height: 0;
            background: linear-gradient(
                180deg,
                rgb(255, 255, 113),
                rgba(255, 255, 113, 0.5),
                transparent 70%
            );
        }
        .top {
            animation: animateTop 3s ease-in-out infinite;
        }
        .bottom {
            animation: animateBottom 3s ease-in-out infinite;
        }
        .right {
            animation: animateRight 3s ease-in-out infinite;
        }
        .left {
            animation: animateLeft 3s ease-in-out infinite;
        }
        @keyframes animateTop {
            25% {
                width: 100%;
                opacity: 1;
            }

            30%,
            100% {
                opacity: 0;
            }
        }
        @keyframes animateBottom {
            0%,
            50% {
                opacity: 0;
                width: 0;
            }

            75% {
                opacity: 1;
                width: 100%;
            }

            76%,
            100% {
                opacity: 0;
            }
        }
        @keyframes animateRight {
            0%,
            25% {
                opacity: 0;
                height: 0;
            }

            50% {
                opacity: 1;
                height: 100%;
            }

            55%,
            100% {
                height: 100%;
                opacity: 0;
            }
        }
        @keyframes animateLeft {
            0%,
            75% {
                opacity: 0;
                bottom: 0;
                height: 0;
            }

            100% {
                opacity: 1;
                height: 100%;
            }
        }
    </style>
    <body>
        <div class="container">
            <div class="form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="signupform" method="post" onsubmit="return validateform()">
                    <h2 style="text-align:center;"><u>Sign-up form</u></h2>
                    <br>
                    Name:
                    <input type="text" placeholder="Name" name="name" style="width:250;" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
                    <br><br>
                    Address:
                    <textarea type="text" placeholder="Address" name="address" style="width:237;"><?php if(isset($_POST['address'])) echo htmlspecialchars($_POST['address']); ?></textarea>
                    <br><br>
                    E-mail:
                    <input type="email" placeholder="abc@gmail.com" name="email" style="width:250;" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                    <br><br>
                    Mobile No:
                    <input type="tel" placeholder="00000 00000" name="mobileno" style="width:220;" value="<?php if(isset($_POST['mobileno'])) echo htmlspecialchars($_POST['mobileno']); ?>">
                    <br><br>
                    Gender:
                    <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked'; ?>>Male
                    <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked'; ?>>Female
                    <br><br>
                    Age:
                    <input type="number" placeholder="00" name="age" style="width:50;" value="<?php if(isset($_POST['age'])) echo htmlspecialchars($_POST['age']); ?>">
                    <br><br>
                    Weight:
                    <input type="number" placeholder="000" name="weight" style="width:50;" value="<?php if(isset($_POST['weight'])) echo htmlspecialchars($_POST['weight']); ?>">
                    Height:
                    <input type="number" placeholder="000" name="height" style="width:50;" value="<?php if(isset($_POST['height'])) echo htmlspecialchars($_POST['height']); ?>">
                    <br><br>
                    Password:
                    <input type="password" placeholder="* * * * * *" name="password" style="width:230;">
                    <br><br>
                    <button class="btn btn-primary" type="submit" value="submit" name="submit" style="width:150;">Sign up</button>
                    <button class="btn btn-danger" type="reset" value="reset" name="reset" style="width:150;">Reset</button><br><br>
                    <p class="text-center">Already a member? <a  href="login.php" style="color:orange; text-decoration:none;" style="">Login</a></p>
                    <span class="top"></span>
                    <span class="right"></span>
                    <span class="bottom"></span>
                    <span class="left"></span>
                </form>
            </div>
        </div>
    </body>
</html>

<!-- Signup Form -->
<!-- name
address
emailid
mobile no
gender
age
package start date
package end date
weight
height
username
password

Login form
Username
password -->
