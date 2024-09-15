<?php
session_start();
require 'products.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['product_id'])) {
    $product_id = intval($_POST['product_id']);
    
    foreach ($products as $product) {
        if ($product['id'] == $product_id) {
            $_SESSION['cart'][] = $product;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item Added</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Succesfully added the item!</h1>
    <br>
    <a href="index.php">
        <button>Go back</button>
    </a>
    </br>
</body>
</html>