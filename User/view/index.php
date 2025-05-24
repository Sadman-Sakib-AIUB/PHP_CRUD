<?php
include "../control/action.php";
?>

<!DOCTYPE html>
<head>
  
  <title> Registration Form </title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <!-- Title section -->
    <div id="form-title" class="title">Registration Form</div>
    <div class="content">
      
      <!-- Registration form -->
      <form action="" method="post">
        
        <div class="user-details">

          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" id="fullname" placeholder="Enter your Fullname">
            <span class="error" name="fullname_error"> <?php echo $fullnameError; ?> </span>
          </div>

          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" id="username" placeholder="Enter your username">
            <span class="error" name="username-error"> <?php echo $usernameError; ?> </span>
          </div>

          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <span class="error" name="email-error"> <?php echo $emailError; ?> </span>
          </div>

          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="phone_number" id="phone-number" placeholder="Enter your number">
            <span class="error" name="phone-error"> <?php echo $phoneNumberError; ?> </span>
          </div>

          <!-- Input for NID Number -->
          <div class="input-box">
            <span class="details">NID Number</span>
            <input type="number" name="nid" id="nid" placeholder="Enter your NID Number">
            <span class="error" name="nid-error"> <?php echo $nidError; ?> </span>
          </div>

          <!-- Input for DOB -->
          <div class="input-box">
            <span class="details">Date Of Birth</span>
            <input type="date" name="dob" id="dob">
            <span class="error" name="dob-error"> <?php echo $dobError; ?> </span>
          </div>
          
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <span class = "error" name="password-error"> <?php echo $passwordError; ?> </span>
          </div>

          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confirm_password" id="confirm-password" placeholder="Confirm your password">
            <span class="error" name="confirm-password-error"> <?php echo $confirmPasswordError; ?> </span>
          </div>


          <!-- Input for Address -->
          <div class="input-box">
            <span class="details">Address</span>
            <textarea name="address" id="address" rows="4" cols="98"></textarea>
            <span class="error" name="address-error"> <?php echo $addressError ?></span>
          </div>
        
        </div>

        <!-- Gender -->
        <div class="item-group">
          <label>Gender:</label>
          <div>
            <input type="radio" id="male" name="gender" value="male" />
            <label for="male">Male</label>
          </div>
          <div>
            <input type="radio" id="female" name="gender" value="female" />
            <label for="female">Female</label>
          </div>
          <span class ="error" name="gender-error"> <?php echo $genderError ?> </span>
        </div>

        <!-- Preferred Pet -->
        <div class="item-group">
          <label>Preferred Pet:</label>
          <div>
            <input type="checkbox" id="cat" name="pet[]" value="cat">
            <label for="cat">Cat</label>
          </div>
          <div>
            <input type="checkbox" id="dog" name="pet[]" value="dog">
            <label for="dog">Dog</label>
          </div>
          <div>
            <input type="checkbox" id="bird" name="pet[]" value="bird"> 
            <label for="bird">Bird</label>
            <span class="error" name="pet-error" > <?php echo $petError ?> </span>
          </div>
        </div>
        
        

        <!-- Registration Form -->
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>

        <!-- Already have account link -->
        <div class="login-link">
          Already have an account? <a href="../view/login.php">Login</a>.
        </div>

      </form>
    </div>
  </div>

  

</body>
</html>