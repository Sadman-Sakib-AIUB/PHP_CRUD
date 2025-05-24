<?php
include "../model/mydb.php";

$fullnameError = $usernameError = $emailError = $phoneNumberError = $nidError = $dobError = $passwordError = $confirmPasswordError =
$addressError = $genderError = $petError =$haserror ="" ;

if (isset($_REQUEST["submit"])){

      //Fullname Validation
      if(empty($_REQUEST["fullname"]) || !preg_match("/^[a-zA-Z\s]*$/", $_REQUEST["fullname"])){

            $fullnameError = "Invalid Fullname";
            $haserror = "1";
      
      }
      else 
           $fullname = $_REQUEST["fullname"];


      //Username Validation
      if(empty($_REQUEST["username"]) || strlen($_REQUEST["username"]) < 2 || !preg_match("/^[a-zA-Z\s]*$/", $_REQUEST["username"])){

            $usernameError = "Invalid Username";
            $haserror = "1";
      
      }
      else 
           $username = $_REQUEST["username"];


      //Email Validation
      if(empty($_REQUEST["email"]) || !filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)){

            $emailError = "Invalid Email Address";
            $haserror = "1";
      }
      else 
            $email = $_REQUEST["email"];


      //Phone Number Validation
      if (empty($_REQUEST["phone_number"]) || strlen($_REQUEST["phone_number"]) != 11){

            $phoneNumberError = "Invalid Phone Number (Must be 11 digits)";
            $haserror = "1";
      }
      else 
            $phone_number = $_REQUEST["phone_number"];


      //NID Number Validation
      if(empty($_REQUEST["nid"]) || strlen($_REQUEST["nid"]) != 10 ){

            $nidError = "Invalid Nid Number (Must be 10 digits)";
            $haserror = "1";
      }
      else 
            $nid = $_REQUEST["nid"];


      //DOB Validation
      if(empty($_REQUEST["dob"])){

            $dobError = "Invalid Date of birth";
            $haserror = "1";
      }
      else 
            $dob = $_REQUEST["dob"];

      
      //Passowrd Validation
      if(empty($_REQUEST["password"])|| strlen($_REQUEST["password"]) < 8  
      || !preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W_]).{8,}$/", $_REQUEST["password"])){
            
            $passwordError = "Password Must be atleast 8 Character";
            $haserror = "1";
      }
      else
            $password = $_REQUEST["password"];


      //Confirm Passowrd Validation
      if ( empty($_REQUEST["confirm_password"]) || !isset($_REQUEST["password"]) || 
            $_REQUEST["confirm_password"] != $_REQUEST["password"]) {

            $confirmPasswordError = "Must be Same as Password";
            $haserror = "1";
      } 
      else 
             $confirmPassword = $_REQUEST["confirm_password"];


      //Address Validation
      if(empty($_REQUEST["address"]) || strlen($_REQUEST["address"]) < 2){

            $addressError = "Invalid Address";
            $haserror = "1";
      
      }
      else 
           $address = $_REQUEST["address"];


      //Gender Validation (Radio Button)
      if (empty($_REQUEST["gender"])) {

            $genderError = "Gender is required";
            $haserror = "1";
      } 
      else
            $gender = $_REQUEST["gender"];

      
      //Pet Validation (Checkbox)
      if (empty($_REQUEST["pet"])) {
            $petError = "Please select one pet.";
            $haserror = "1";
      } 
      else
            $selectedPets = $_REQUEST["pet"];
            


      if ($haserror == ""){

            $conn = createCon();
            $pet = implode(", ", $selectedPets);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            insertData(
                        $conn,
                        $_POST["fullname"],
                        $_POST["username"],
                        $_POST["email"],
                        $_POST["phone_number"],
                        $_POST["password"],
                        $_POST["confirm_password"],
                        $_POST["nid"],
                        $_POST["dob"],
                        $_POST["address"],
                        $_POST["gender"],
                        $pet
                  );

            }
            closeCon($conn);
      }
}

?>







                  
