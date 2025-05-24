<?php
session_start();
include "../model/db.php";



if (basename($_SERVER["PHP_SELF"]) == "login.php") 
{
if(isset($_POST["submit"]))
{
    $conn = createAdminCon();
    
    $username = $_POST["firstname"];
    $password = $_POST["password"];

    $result = checkLogin($conn,$username, $password);

    if($result->num_rows > 0)
    {
        $_SESSION["firstname"]=$username;
        header("Location:../view/dashboard.php");
    }
    else
    {
        echo"Enter Valid Username & Password";
    }
}
}
?>