<?php
include "../control/profile_control.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="profile-box">
    <h2>Hello, <?php echo $user['username']; ?>!</h2>
    <ul>
      <li><strong>Full Name:</strong> <?php echo $user['fullname']; ?></li>
      <li><strong>Username:</strong> <?php echo $user['username']; ?></li>
      <li><strong>Email:</strong> <?php echo $user['email']; ?></li>
      <li><strong>Phone Number:</strong> <?php echo $user['phonenumber']; ?></li>
      <li><strong>NID Number:</strong> <?php echo $user['nidNumber']; ?></li>
      <li><strong>Date of Birth:</strong> <?php echo $user['dob']; ?></li>
      <li><strong>Address:</strong> <?php echo $user['address']; ?></li>
      <li><strong>Gender:</strong> <?php echo $user['gender']; ?></li>
      <li><strong>Preferred Pet:</strong> <?php echo$user['prefferedPet']; ?></li>
    </ul>

  <div class="button-group">
    <a href="edit_profile.php" class="edit-btn"> Edit Profile </a>

    
    <!-- Delete Account Button -->
    <form action="../control/delete_account.php" method="post" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
    <input type="hidden" name="username" value="<?php echo htmlspecialchars($user['username']); ?>">
    <input type="submit" name="delete" value="Delete Account" class = "dlt-btn">
    </form>

  </div>
    
    <a href="login.php" class="logout-btn">Logout</a>
    

  </div>

  </div>
  
  

  
  


</body>
</html>
