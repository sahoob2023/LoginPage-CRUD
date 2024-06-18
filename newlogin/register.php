<?php
include 'connection.php';
 

if (isset($_POST['sbt'])) {

	$name = mysqli_real_escape_string($conn, $_POST['txt']);
	$emaill = $_POST['email'];
 
	$password = $_POST['pswd'];
 
	$conpassword = $_POST['conpswd'];

	$dulicate = mysqli_query($conn, "SELECT * FROM registerpage where newpassword = '$password' and confirmpassword='$conpassword'");
	// if (mysqli_num_rows($dulicate) > 0) {

	// 	echo "<script>alert('username and email alerdy fillup');</script>";
	// } else {
		if ($password == $conpassword) {
			$query = "INSERT  INTO registerpage(fullname,fullemail,newpassword,confirmpassword)values('$name','$emaill','$password','$conpassword')";
			mysqli_query($conn, $query);
			echo "<script>alert('Register succesfully');</script>";
		} else {
			echo "<script>alert('Password Does not match');</script>";
		}
	}
// } 
?>



<?php
if (isset($_POST['btn'])) {
	$newemail = $_POST['email12'];
	$newpass = $_POST['pass12'];

	$result = mysqli_query($conn, "select * from registerpage where fullemail='$newemail' and newpassword='$newpass'");

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['fullname'];
		if ($newpass == $row["newpassword"]) {
			header('Location:student.php');
		} else {
 		}
	} else {
		echo "<script>alert('wrong password')</script>";

	}
}


  ?>

<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<style>

	</style>
</head>

<body>
	</div>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="signup">
			<form action="" method="post">
				<label for="chk" aria-hidden="true">Register Page</label>
				<input type="text" name="txt" placeholder="Username" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pswd" placeholder="Password" required>
				<input type="password" name="conpswd" placeholder="ConfirmPassword" required>

				<button name="sbt">Sign in</button>
			</form>
		</div>

		<div class="login">
			<form action="" method="post">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email12" placeholder="Email" required="">
				<input type="password" name="pass12" placeholder="password" required="">
				<button name="btn">Login</button>
			</form>
		</div>


	</div>

</body>

</html>