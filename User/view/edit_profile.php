<?php
include "../control/edit_profile_control.php";
?>

<!DOCTYPE html>
<head>
  
  <title> Edit Profile </title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <!-- Title section -->
    <div id="form-title" class="title">Update your information</div>
    <div class="content">
      
      <!-- Registration form -->
      <form action="../control/update_profile.php" method="post">
        
        <div class="user-details">

          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" id="fullname" value="<?php echo $user['fullname']; ?>">
          </div>


          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" value="<?php echo $user['email'];?>">
          </div>

          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" id="phone-number" value="<?php echo $user['phonenumber']; ?>">
            
          </div>

          <!-- Input for NID Number -->
          <div class="input-box">
            <span class="details">NID Number</span>
            <input type="text" name="nidNumber" id="nid" value="<?php echo $user['nidNumber']; ?>">
          </div>

          <!-- Input for DOB -->
          <div class="input-box">
            <span class="details">Date Of Birth</span>
            <input type="date" name="dob" id="dob" value="<?php echo $user['dob']; ?>">
          </div>
          

          <!-- Input for Address -->
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" id="address" rows="4" cols="98" value="<?php echo $user['address']; ?>"></input>
          </div>


        <!-- Gender -->
          <label>Gender: 
            <select name="gender">
                <option value="male" <?php if ($user['gender'] == 'male') echo 'selected'; ?>>Male</option>
                <option value="female" <?php if ($user['gender'] == 'female') echo 'selected'; ?>>Female</option>
            </select>
        </label><br><br>

        <!-- Preffered Pet -->
        <label>Preffered Pet: 
            <select name="prefferedPet">
                <option value="cat" <?php if ($user['prefferedPet'] == 'cat') echo 'selected'; ?>>Cat</option>
                <option value="dog" <?php if ($user['prefferedPet'] == 'dog') echo 'selected'; ?>>Dog</option>
                <option value="bird" <?php if ($user['prefferedPet'] == 'bird') echo 'selected'; ?>>Bird</option>
            </select>
        </label><br><br>
        
        </div>

        <!-- Update Button -->
        <div class="button">
          <input type="submit" name="submit" value="Update">
        </div>

        <!-- Cancel Button -->
        <a href="profile.php" class="cancel-btn">Cancel</a>

      </form>
    </div>
  </div>

  

</body>
</html>