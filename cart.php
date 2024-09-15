<?php
session_start();
require 'products.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Cart</h1>
    <hr>
    <ul>
        <?php
        $total_price = 0;
        foreach ($_SESSION['cart'] as $item) {
            echo '<li>';
            echo $item['name'] . ' - ' . $item['price'] . ' PHP';
            $total_price += $item['price'];
            echo '</li>';
        }
        ?>
    </ul>
    <p><strong>Total Price: <?php echo $total_price; ?> PHP</strong></p>

    <a href="reset-cart.php" class="button">Clear my cart</a>
    <br>
    <a href="place_order.php" class="button">Place the order</a>
    <br>
    <a href="index.php" class="button">Go back</a>
</body>
</html>