<?php

function createProductCon()
{
    return new mysqli("localhost", "root", "", "registrationform");
}


function insertProductData($conn, $proid, $proname, $quantity, $price, $category)
{
    $sqlquery = "INSERT INTO productinfo(Product_id,Product_name,Quantity,Price,category)
                values('$proid', '$proname', '$quantity', '$price' , '$category')";
    if ($conn->query($sqlquery)) {
        echo "Data Inserted Successfully!";
    } else {
        die("error: " . $conn->connect_error);
    }
}


function updateProductData($conn, $proid, $proname, $quantity, $price, $category)
{
    $sqlquery = "UPDATE productinfo 
                 SET Product_name = '$proname', 
                     Quantity = '$quantity', 
                     Price = '$price', 
                     category = '$category' 
                 WHERE Product_id = '$proid'";

    if ($conn->query($sqlquery)) {
        echo "Data Updated Successfully!";
    } else {
        die("Error: " . $conn->error);
    }
}

function deleteProductData($conn)
{
    if (isset($_GET['delete_id'])) {
        $proid = $_GET['delete_id'];
        $sqlquery = "DELETE FROM productinfo WHERE Product_id = '$proid'";
        if ($conn->query($sqlquery)) {
            echo "Data Deleted Successfully!";
        } else {
            die("Error: " . $conn->error);
        }
    }
}
