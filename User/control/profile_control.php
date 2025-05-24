<?php
session_start();
include "../model/mydb.php";

// Redirect to login if not logged in
if (!isset($_SESSION['username'])) 
{
    header("Location: ../view/login.php");
}

$conn = createCon();
$username = $_SESSION['username'];

// Fetch user data
$sql = "SELECT * FROM customerinfo WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) 
{
    $user = mysqli_fetch_assoc($result);
} 
else 
{
    echo "User not found!";
}
?>