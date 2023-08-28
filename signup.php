<?php
$conn = mysqli_connect("localhost", "root", "","resturant");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link href="style.css" rel="stylesheet"  >
</head>
<body>
    <div class="Sign_up">
        <div class="Sign_up_item">
            <h1>Sign Up</h1>
            <h4>It's free and only takes a minute</h4>
            <form class="form_sign_up" method="post" action="handel.php" enctype = "multipart/form-data">
                <label>First Name</label>
                <input type="text" name ="fn">
                <label>Last Name</label>
                <input type="text" name="ln">
                <label>Email</label>
                <input type="email" name="em">
                <label>Password</label>
                <input type="password" name="pass1" >
                <label>Confirm Password</label>
                <input type="password" name="pass2" >

                <label>Photo</label>
                <input class="input_photo" type="file" name="photo" accept=".jpg,.png,.jpeg">   
                <input type="submit">
            </form>
            <p>By clicking the Submit button,you agree to <br>
            <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>  
            </p>
            
      </div>
      <p class="sign_up_p2">Already have an account? <a href="login.php">Login</a> </p>
    </div>
</body>
</html>