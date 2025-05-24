<?php
session_start();
if (!isset($_SESSION['username'])) 
{
    header("Location: ../view/login.php");
}

include "../model/mydb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $conn = createCon();
    $username = $_SESSION['username'];

    // fetch values
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $nidNumber = $_POST['nidNumber'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $prefferedPet = $_POST['prefferedPet'];

    $sql = "UPDATE customerinfo 
            SET fullname='$fullname', email='$email', phonenumber='$phonenumber',
                nidNumber='$nidNumber', dob='$dob', address='$address',
                gender='$gender', prefferedPet='$prefferedPet'
            WHERE username='$username'";

    if (mysqli_query($conn, $sql)) 
    {
        header("Location: ../view/profile.php");
    } 
    else 
    {
        echo "Error updating profile: " . mysqli_error($conn);
    }

    closeCon($conn);
}
?>
