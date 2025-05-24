<?php
include "../control/update_product_control.php";


?>

<!DOCTYPE html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css" />
</head>

<body>
    <main class="continer">
        <div class="continer--1 login-container">
            <form class="login-box" method="post" action="update_product.php">

                <label for="product_id" class="proId">Product Id:</label>
                <input type="text" id="id" name="proid" value="<?php echo $product['Product_id']; ?>" readonly />

                <label for="product_name" class="proName">Product name:</label>
                <input type="text" id="name" name="proname" value="<?php echo $product['Product_name']; ?>">

                <label for="quantity" class="Quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="<?php echo $product['Quantity']; ?>" />



                <label for="price" class="Price">Price:</label>
                <input type="number" id="price" name="price" value="<?php echo $product['Price']; ?>" />

                <label for="category" class="Category">Category:</label>
                <input type="text" id="category" name="category" value="<?php echo $product['category']; ?>" />



                <button type="submit" class="submit" name="update">Update</button>
            </form>
        </div>