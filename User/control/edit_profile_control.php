<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../view/login.php");
}

include "../model/mydb.php";
$conn = createCon(); 

$username = $_SESSION['username'];
$sql = "SELECT * FROM customerinfo WHERE username='$username'";


$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

closeCon($conn);
?>
