<?php
session_start();
include 'connect.php'; // Replace with your database connection details

// Function to add a product to the cart
function addToCart($productId, $quantity) {
    // Initialize the cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // If the product is already in the cart, update the quantity
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] += $quantity;
    } else {
        // Otherwise, add the product to the cart
        $_SESSION['cart'][$productId] = $quantity;
    }
}

// Handle add to cart action
if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['pid'])) {
    $productId = $_GET['pid'];
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    // Add the product to the cart
    addToCart($productId, $quantity);

    // Redirect back to the product page or wherever you want
    header('Location: product.php');
    exit();
}

// Function to calculate the total price of items in the cart
function calculateCartTotal() {
    $total = 0;

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productId => $quantity) {
            // Fetch product price from the database
            $productPrice = getProductPrice($productId);
            if ($productPrice !== false) {
                $total += $productPrice * $quantity;
            }
        }
    }

    return $total;
}

// Function to get product price from the database
function getProductPrice($productId) {
    global $db; // Database connection

    $query = "SELECT price FROM products WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindParam(':id', $productId, PDO::PARAM_INT);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result !== false ? $result['price'] : false;
}
?>
