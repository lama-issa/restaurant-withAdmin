<?php
session_start();
$name = "";
$email = "";
$password = "";
$confirmpassword = "";
$photo = "";
$id = "";
$edit_state = false;
$errors ="";

$db = mysqli_connect('localhost', 'root', '', 'crud');

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $photo = $_FILES['photo']['name'];
	$photo_tmp = $_FILES['photo']['tmp'];
    $query = "INSERT INTO info ( name , email ,password, confirmpassword ,photo) VALUES ('$name', '$email','$password', '$confirmpassword','$photo')";
    mysqli_query($db, $query); 
    $_SESSION['msg'] = "user saved";
	$move=move_uploaded_file($photo_tmp,"../images/$photo_tmp");
    header('location: login.php');
}
// update 
if (isset($_POST['update'])) {   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $photo = $_POST['photo'];
    $id = $_POST['id'];
    mysqli_query($db, "UPDATE info SET name='$name', email='$email' , password='$password' , confirmpassword='$confirmpassword' , photo='$photo' WHERE id=$id");
    $_SESSION['msg'] = "user updated!"; 
    header('location: ind.php');
}

//delete
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM info WHERE id=$id");
    $_SESSION['msg'] = "user deleted!"; 
    header('location: ind.php');
}



function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $name, $errors;

	// grap form values
	$name = e($_POST['name']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($name)) {
		array_push($errors, "name is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (empty($errors)) {
		$password = md5($password);

		$query = "SELECT * FROM info WHERE name='$name' AND password='$password' LIMIT 1";
		
			if ($_POST['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: ind.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index_html.html');
			}
		}else {
		}
	}


function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

//retrieve records
$results = mysqli_query($db,"SELECT * FROM info");

?>
