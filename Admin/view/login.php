<?php
include "../control/login_control.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="login.css" />
    <title>Log in</title>
  </head>

  <body>
    <form action=" " method="post" class="form">
      <h1>Log in</h1>
      <div class="item-group">
        <div>
          <label>
            <img src="../images/icname.png" width="18px" /> User Name:</label
          >
          <br />
          <input type="text" name="firstname" id="fname" placeholder="Enter Username" />
          
        </div>
        <div>
          <label>
            <img src="../images/icpass.png" width="18px" /> Password:</label
          >
          <br />
          <input type="password" name="password" placeholder="Enter Password" />
          
        </div>
        <div class="submit-button">
          <input type="submit" name="submit" value="Login" />
        </div>
        <div class="login-link">
          Do not have an account? <a href="../view/registration_form_admin.php">Register</a>
        </div>

      </div>
    </form>
  </body>
</html>