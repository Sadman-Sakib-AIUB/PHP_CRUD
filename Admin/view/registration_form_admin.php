
<?php
include "../Control/action.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
    
    <title>Seller Registration Form</title>
  </head>

  <body>
    <h2 id="form-title">Seller Registration Form</h2>

    <form action=" " method="post" target="_blank " class="form" >
      <div class="item-group">
        <div>
          <label>
            <img src="../images/icname.png" width="18px" /> First Name:</label>
          <br />
          <input type="text" name="firstname" id="fname" /> 
          <p id=fnerror><?php echo $firstnameError; ?></p>
          
        </div>
        <div>
          <label>Last Name:</label><br />
          <input type="text" name="lastname" id="lname"/>
          <p id=lnerror ><?php echo $lastnameError; ?></p>
        </div>
      </div>

      <div class="item-group">
        <div>
          <label>
            <img src="../images/icphn.png" width="18px" /> Phone Number:</label>
           
          <br />
          <input type="text" name="phonenumber" id="phonenum" />
          <p id=phn-error><?php echo $phonenumError; ?></p>
        </div>
        <div>
          <label><img src="../images/icgmail.png" width="18px" /> G-mail:</label>
          <br />
          <input type="email" name="email" />
          <p ><?php echo $emailError; ?></p>
        </div>
      </div>

      <div class="item-group">
        <div>
          <label>
            <img src="../images/icpass.png" width="18px" /> Password:</label>
          <br />
          <input type="password" name="password"  />
          <p ><?php echo $passwordError; ?></p>
        </div>
        <div>
          <label>
            <img src="../images/icdate.png" width="18px" /> Date of Birth:</label>
            
          <br />
          <select name="Date" id="date">
            <option value="">Date</option>
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
            <option value="four">4</option>
          </select>

          <select name="Month" id="month">
            <option value="">Month</option>
            <option value="january">Jan</option>
            <option value="february">Feb</option>
            <option value="march">Mar</option>
            <option value="april">Apr</option>
          </select>

          <select name="Year" id="year">
            <option value="">Year</option>
            <option value="1990">1990</option>
            <option value="1995">1995</option>
            <option value="2000">2000</option>
            <option value="2005">2005</option>
          </select>
          <p id=dob-error><?php echo $dobError; ?></p>
        </div>
      </div>
     


      <div class="item-group">
        <label><img src="../images/icgender.png" width="18px" /> Gender:</label>
        <div>
          <input type="radio" id="male" name="gender" value="male" />
          <label for="male">Male</label>
        </div>
        <div>
          <input type="radio" id="female" name="gender" value="female" />
          <label for="female">Female</label>
        </div>
        
      </div>
      <p id=generror><?php echo $genderError; ?></p>

      

      <div class="item-group"><label>
        <div>
        
          <img src="../images/ictin.png" width="18px" /> TIN Certificate No:</label>
         
        
        <input type="number" name="tinnumber"  />
       </div>
        <p ><?php echo $tinNumError; ?></p>
       
      </div>



      <div class="submit-button">
        <input  type="submit" name="submit" value="Register" />
        <input  type="reset" value="Reset" />
      </div>

<!--Go to Login -->
      <div class="login-link">
          Have an account? <a href="../view/login.php">Login</a>
        </div>
    </form>



  </body>
</html>
