<?php
include "../control/edit_profile_control.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Your Profile</h2>
    <form method="post" action="../control/update_profile.php">
        <label>Fullname: <input type="text" name="fullname" value="<?php echo htmlspecialchars($user['fullname']); ?>"></label><br><br>
        <label>Email: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"></label><br><br>
        <label>Phone Number: <input type="text" name="phonenumber" value="<?php echo htmlspecialchars($user['phonenumber']); ?>"></label><br><br>
        <label>NID Number: <input type="text" name="nidNumber" value="<?php echo htmlspecialchars($user['nidNumber']); ?>"></label><br><br>
        <label>Date of Birth: <input type="date" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>"></label><br><br>
        <label>Address: <input type="text" name="address" value="<?php echo htmlspecialchars($user['address']); ?>"></label><br><br>
        <label>Gender: 
            <select name="gender">
                <option value="Male" <?php if ($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                <option value="Other" <?php if ($user['gender'] == 'Other') echo 'selected'; ?>>Other</option>
            </select>
        </label><br><br>
        <label>Preferred Pet: <input type="text" name="prefferedPet" value="<?php echo htmlspecialchars($user['prefferedPet']); ?>"></label><br><br>

        <input type="submit" name="submit" value="Update Profile">
    </form>
    <p><a href="profile.php">Cancel</a></p>
</body>
</html>
