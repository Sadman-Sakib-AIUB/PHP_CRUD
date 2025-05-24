<?php

function createAdminCon()
{
    return new mysqli("localhost", "root","","registrationform");
}


function insertAdminData($conn,$firstname,$lastname, $phonenumber,$email, $password,$dob,$gender,$tinnumber)
{
    
     $sqlquery = "INSERT INTO admininfo (First_Name,Last_Name,Phone_Number,G_mail,Password,DOB,Gender,Tin_Num)
                values('$firstname', '$lastname', '$phonenumber', '$email' , '$password','$dob', '$gender' ,  '$tinnumber')";
    if($conn->query($sqlquery))
    {
        echo "Data Inserted Successfully!";
    }
    else
    {
        die("error: ".$conn ->connect_error);
    }
}

function checkLogin($conn, $username, $password)
{
    $sqlquery = "SELECT First_Name,Password FROM admininfo WHERE First_Name='$username' AND Password='$password'";
    $result = $conn->query($sqlquery);
    return $result;
}

function closeCon($conn)
{
    $conn->close();
}



?>