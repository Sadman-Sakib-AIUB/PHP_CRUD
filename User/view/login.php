<?php
include "../control/login_control.php";
?>

<!DOCTYPE html>
<head>
  
  <title> Login Form </title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container">
    <!-- Title section -->
    <div id="form-title" class="title">Login Form</div>
    <div class="content">
      
      <!-- Registration form -->
      <form action="" method="post">
        
        <div class="user-details">

          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username">
            
          </div>
          
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            
          </div>
        </div>

        <!-- Login Button -->
        <div class="button">
          <input type="submit" name="submit" value="Login">
        </div>

        <!-- Don't Have Account link -->
        <div class="login-link">
          Do not have an account? <a href="../view/index.php">Register</a>.
        </div>
      
      </form>
    </div>
  </div>

  

</body>