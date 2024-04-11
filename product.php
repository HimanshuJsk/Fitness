<?php
    session_start();
    require_once("connect.php");

//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM product WHERE id='$pid'");
	          while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"], 'image'=>$productByCode["image"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
    case "remove":
        if (!empty($_SESSION["cart_item"]) && isset($_GET["code"])) {
            $codeToRemove = $_GET["code"];
            if (isset($_SESSION["cart_item"][$codeToRemove])) {
                unset($_SESSION["cart_item"][$codeToRemove]);
            }
            // Check if cart is empty and unset session variable if so
            if (empty($_SESSION["cart_item"])) {
                unset($_SESSION["cart_item"]);
            }
        }
    break;    
	// case "remove":
	// 	if(!empty($_SESSION["cart_item"])) {
	// 		foreach($_SESSION["cart_item"] as $k => $v) {
	// 				if($_GET["code"] == $k)
	// 					unset($_SESSION["cart_item"][$k]);				
	// 				if(empty($_SESSION["cart_item"]))
	// 					unset($_SESSION["cart_item"]);
	// 		}
	// 	}
	// break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<html>
    <head>
        <title>Product</title>
        <!--Css-->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!--js-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!--Favicon-->
	    <link rel="icon" type="image/x-icon" href="Image/31.png">
        <!-- font-awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".product-image").hover(function () {
                    // Toggle the hover effect by adding/removing the 'hovered' class
                    $(this).find(".product-image-hover").toggleClass("hovered");
                });
            });
        </script>
    </head>
    <style>
        html{
            scroll-behavior: smooth;
        }
        html,body{
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .nav-item a:hover{
            text-decoration: underline orangered;
        }
        .dropdown-item:hover{
            background-color:red;
            color:white;
        }
        #fname:hover{
            text-decoration: underline orangered;
        }
        #product{
            height: 500px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(Image/hero-2.jpg);
            /* background-blend-mode: ; */
        }
        #product h1{
            font-size: 80px;
        }
        #shopping-cart {
            margin: 20px;
        }
        #product-grid {
            margin: 20px;
            flex: 1;
        }
        #shopping-cart table {
            width: 100%;
            background-color: #F0F0F0;
        }
        #shopping-cart table td {
            background-color: #FFFFFF;
        }
        .txt-heading {
            color: #211a1a;
            border-bottom: 1px solid black;
            overflow: auto;
        }
        #btnEmpty {
            background-color: #ffffff;
            border: #d00000 1px solid;
            padding: 5px 10px;
            color: #d00000;
            float: right;
            text-decoration: none;
            border-radius: 3px;
            margin: 10px 0px;
        }
        .no-records {
            text-align: center;
            clear: both;
            margin: 38px 0px;
        }
        #product-grid .txt-heading {
            margin-top: 50px;
        }
        .product-item {
            float: left;
            background: #ffffff;
            margin: 30px 30px 0px 0px;
            border: black 1px solid;
            position: relative;
            overflow: hidden;
        }
        .product-image {
            height: 155px;
            width: 250px;
            background-color: #FFF;
        }
        .clear-float {
            clear: both;
        }
        .demo-input-box {
            border-radius: 2px;
            border: #CCC 1px solid;
            padding: 2px 1px;
        }
        .tbl-cart {
            font-size: 0.9em;
        }
        .tbl-cart th {
            font-weight: normal;
        }
        .product-title {
            margin-bottom: 20px;
        }
        .product-price {
            float:left;
        }
        .cart-action {
            float: right;
        }
        .product-quantity {
            padding: 5px 10px;
            border-radius: 3px;
            border: #E0E0E0 1px solid;
        }
        .product-tile-footer {
            padding: 15px 6px 0px 5px;
            overflow: auto;
        }
        .cart-item-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: #E0E0E0 1px solid;
            padding: 5px;
            vertical-align: middle;
            margin-right: 15px;
        }
        .product-image-hover {
            position: absolute;
            top: 33%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            height: 65%;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s ease;
        }

        .product-image-hover img {
            max-width: 100%;
            max-height: 100%;
            border: 2px solid #fff;
            border-radius: 5px;
        }
        .product-image-hover.hovered {
            opacity: 1;
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
                        <li class="nav-item Active">
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
            </div>
        </nav>
        <!--Header area end-->
        <!--Shopping Cart area start-->
        <div class="d-flex justify-content-center align-items-center flex-column " id="product">
                <h1 style="font-size: px;" class="text-light " >Product</h1>
        </div>
        <div id="shopping-cart">
            <div class="txt-heading">Shopping Cart</div>
            <a id="btnEmpty" href="product.php?action=empty">Empty Cart</a>
            <?php
                if(isset($_SESSION["cart_item"])){
                    $total_quantity = 0;
                    $total_price = 0;
                ?>	
                <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                <tr>
                <th style="text-align:left;">Name</th>
                <th style="text-align:left;">Code</th>
                <th style="text-align:right;" width="5%">Quantity</th>
                <th style="text-align:right;" width="10%">Unit Price</th>
                <th style="text-align:right;" width="10%">Price</th>
                <th style="text-align:right;" width="10%">Buying</th>
                <th style="text-align:center;" width="5%">Remove</th>
                </tr>	
                <?php		
                    foreach ($_SESSION["cart_item"] as $item){
                        $item_price = $item["quantity"]*$item["price"];
                ?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                <td  style="text-align:right;"><button class="btn bg bg-primary"><a href="" style="text-decoration:none; color:black;">Buying</a></button></td>
				<td style="text-align:center;"><a href="product.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="Image/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
                
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		        }
		        ?>
                <tr>
                <td colspan="2" align="right">Total:</td>
                <td align="right"><?php echo $total_quantity; ?></td>
                <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
                <td></td>
                </tr>
                </tbody>
                </table>
                <?php
                    $_SESSION['item_price'] = $item_price;
                ?>		
                <?php
                } else {
                ?>
                <div class="no-records">Your Cart is Empty</div>
                <?php 
                }
                ?>
        </div>
        <!--Shooping Cart area end-->
        <!--Products area start-->
        <div class="mb-100" id="product-grid">
            <div class="txt-heading">Products</div>
            <div class="d-flex justify-content-center">
            <?php
            $product= mysqli_query($con,"SELECT * FROM product ORDER BY id ASC");
            if (!empty($product)) { 
                while ($row=mysqli_fetch_array($product)) {
                
            ?>
            <div class="product-item">
			<form method="post" action="product.php?action=add&pid=<?php echo $row["id"]; ?>">
			<div class="product-image">
                <img src="<?php echo $row["image"]; ?>" class="rounded mx-auto mt-2 d-block" style="width:165;">
                <div class="product-image-hover">
                    <img src="<?php echo $row["image"]; ?>" alt="Hovered Image" class="">
                </div>
            </div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $row["name"]; ?></div>
			<div class="product-price"><?php echo "$".$row["price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" style="width:50;" /><input type="submit" value="Add to Cart" class="btnAddAction btn-success ml-2" /></div>
			</div>
			</form>
		</div>
            <?php
                    }
                }  else {
            echo "No Records.";

                }
            ?>
            </div>
        </div>
        <!--Products area end-->
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