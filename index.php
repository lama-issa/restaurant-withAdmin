<?php
include('server.php')
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
            <form class="form_sign_up" method="post" action="server.php" enctype = "multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $name;?>">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" >
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>" >
                <label>Photo</label>
                <input class="input_photo" type="file" name="photo" accept=".jpg,.png,.jpeg" value="<?php echo $photo; ?>" >   
                <input type="submit" name="save">
            </form>
            <p>By clicking the Submit button,you agree to <br>
            <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>  
            </p>
            
      </div>
      <p class="sign_up_p2">Already have an account? <a href="login.php">Login</a> </p>
    </div>
</body>
</html>