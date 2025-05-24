<?php

function createCon()
{
    $conn = mysqli_connect("localhost", "root","","registrationform");
    return $conn;
}

function insertData($conn,$fullname,$username, $email, $phone_number, $password, $confirm_password, $nid, $dob, $address, $gender,$pet)
{
    $sqlquery = "INSERT INTO customerinfo (fullname,username,email,phonenumber,password,confirmpassword,nidNumber,dob,address,gender,prefferedPet)
                values('$fullname', '$username', '$email', '$phone_number', '$password', '$confirm_password', '$nid', '$dob', '$address', '$gender','$pet')";

    if(mysqli_query($conn, $sqlquery))
    {
        header("Location:../view/login.php");
    }
    else
    {
        die("error: ". mysqli_error($conn));
    }
}

function checkLogin($conn,$username,$password)
{
    $sqlquery = "SELECT username,password FROM customerinfo WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sqlquery);
    return $result;
    
}

function closeCon($conn)
{
    mysqli_close($conn); 
}



?>