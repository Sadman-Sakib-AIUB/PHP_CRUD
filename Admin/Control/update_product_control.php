<?php


include "../model/prodb.php";

$conn = createProductCon();

if (isset($_GET["id"])) {
    $proid = $_GET["id"];

    // Fetch product details by proid
    $sql = "SELECT * FROM productinfo WHERE Product_id = '$proid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update product data
    updateProductData(
        $conn,
        $_POST["proid"],
        $_POST["proname"],
        $_POST["quantity"],
        $_POST["price"],
        $_POST["category"]
    );


    header("Location: ../view/dashboard.php");
    exit();
}

$conn->close();
