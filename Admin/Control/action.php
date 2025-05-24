<?php
include "../model/db.php";

$firstnameError  = $lastnameError = $phonenumError = $emailError = $passwordError = $genderError = $dobError =  $tinNumError = $haserror = "";

if(isset($_REQUEST["submit"])){


      if(empty($_REQUEST["firstname"]) ){

            $firstnameError = "Invalid Firstname";
             $haserror = "1";
      
      }
      else 
           $firstname = $_REQUEST["firstname"];


           if(empty($_REQUEST["lastname"]) ){

            $lastnameError = "Invalid Lastname";
             $haserror = "1";
      
      }
      else 
           $lastname = $_REQUEST["lastname"];



      if (empty($_REQUEST["phonenumber"]) || strlen($_REQUEST["phonenumber"]) != 11){

            $phonenumError = "Invalid Phone Number ";
             $haserror = "1";
      }
      else 
            $phonenumber = $_REQUEST["phonenumber"];



       if(empty($_REQUEST["email"]) || ! filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)){

            $emailError = "Invalid Email Address";
             $haserror = "1";
      }
      else 
            $email = $_REQUEST["email"];


     
      if(empty($_REQUEST["password"])|| strlen($_REQUEST["password"]) < 8 ){
                  
                  $passwordError = "Enter atleast 8 Character";
                   $haserror = "1";
            }
            else
                  $password = $_REQUEST["password"];

      if(empty($_REQUEST["gender"])){

            $genderError = "Invalid Gender";
             $haserror = "1";
      }
      else 
           
            $gender =$_REQUEST["gender"];



       if (empty($_REQUEST["Date"])||empty($_REQUEST["Month"])||empty($_REQUEST["Year"]) ) {

             $dobError = "Invalid Date of Birth";
              $haserror = "1";

      }
      else{ 
                 
            $date = $_REQUEST["Date"];
            $month = $_REQUEST["Month"];
            $year = $_REQUEST["Year"];
            $dob = $date . " " . $month . " " . $year;
       }



       if(empty($_REQUEST["tinnumber"])){

            $tinNumError = "Invalid Tin Number";
             $haserror = "1";
      }
      else 
           
            $tinNumber =$_REQUEST["tinnumber"];



             if ($haserror == ""){

            $conn = createAdminCon();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            insertAdminData(
                        $conn,
                        $_POST["firstname"],
                        $_POST["lastname"],
                        $_POST["phonenumber"],
                        $_POST["email"],
                        $_POST["password"],
                        $dob,
                        $_POST["gender"],
                      
                        $_POST["tinnumber"]
                       
                       
                  );

            }
            closeCon($conn);
      }





}

?>