<?php
include('server.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="style.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="login">
        <div class="login_item">
            <h1>Login</h1>
            <form class="form_login" action="login.php" method = "post">
                <label>Full Name</label>
                <input type="text" name="name" value="<?php echo $name;?>">

                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" >

                <label>Select user type</label>
                <select name="user_type" class="user_type">
                    <option value="admin" name="admin">Admin</option>
                    <option value="user" name="user" selected>User</option>
                </select>
                <a></a>
                <input type="submit" name="login_btn">
            </form>        
      </div>
      <p class="login_p2">Not have an account? <a href="index.php">Sign Up Here</a> </p>
    </div>
</body>
</html>