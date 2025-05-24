<?php
session_start();
include "../model/mydb.php";


if(isset($_REQUEST["submit"]))
{
    $conn = createCon();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = checkLogin($conn,$_REQUEST["username"],$_REQUEST["password"]);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION["username"] = $username;
        header("Location:../view/profile.php");
    }
    else
    {
        echo"Enter Valid Username & Password";
    }
}

?>