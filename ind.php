<?php include('server.php');

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
    $record = mysqli_fetch_array($rec);/// 
    $name = $record['name'];
    $email = $record['email'];
    $password = $record['password'];
    $confirmpassword = $record['confirmpassword'];
    $photo = $record['photo'];
    $id = $record['id'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: Create, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
    <?php if (isset($_SESSION['msg'])): ?>
    	<div class="msg">
	    	<?php 
		    	echo $_SESSION['msg']; 
		    	unset($_SESSION['msg']);
		    ?>
	    </div>
    <?php endif ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Photo</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>


	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['confirmpassword']; ?></td>
			<td> <img src="../images/$photo"/></td>
			<td>
				<a href="ind.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
    </tbody>
</table>

	<form method="post" action="server.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
        <div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
        <div class="input-group">
			<label>Password</label>
			<input type="password" name="password" value="<?php echo $password; ?>">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>">
		</div>
        <div class="input-group">
			<label>Photo</label>
			<input class="input_photo" type="file" name="photo" accept=".jpg,.png,.jpeg" value="<?php echo $photo; ?>">
		</div>
        <div class="input-group">		
		<?php if ($edit_state == false): ?>       
	        <button class="btn" type="submit" name="save" >Save</button>
        <?php else: ?>
	        <button class="btn" type="submit" name="update" >Update</button>
        <?php endif ?>
        </div>
	</form>
</body>
</html>