<?php
session_start();
include "../model/mydb.php";

if (isset($_POST['delete'])) 
{
    $conn = createCon();

    $username = $_POST['username'];

    $sql = "DELETE FROM customerinfo WHERE username='$username'";

    if (mysqli_query($conn, $sql)) 
    {
        session_destroy();
        echo "Account Deleted Successfully!";
        echo '<br><a href="../view/index.php">Register Again</a>';
    } 
    else 
    {
        echo "Error deleting account: " . mysqli_error($conn);
    }

    closeCon($conn);
} 
else 
{
    echo "Invalid request.";
}
?>
