<?php

include_once "../model/prodb.php";
$sql = "SELECT * FROM  productinfo ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Product_id"] . "</td>";
        echo "<td>" . $row["Product_name"] . "</td>";
        echo "<td>" . $row["Quantity"] . "</td>";
        echo "<td>" . $row["Price"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        
        
        echo "<td><a class='edit-btn ' href='../view/update_product.php?id=" . $row["Product_id"] . "'>Edit</a> <a class='delete-btn' href='../view/dashboard.php?delete_id=" . $row["Product_id"] . "'>Delete</a></td>";
        echo "</tr>";
    }

}
