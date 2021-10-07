<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

// initializing variables
$nama   = "";
$email  = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'tracer_bayu');

// REGISTER USER
if (isset($_POST['register'])) {
	// receive all input values from the form
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password2 = mysqli_real_escape_string($db, $_POST['password2']);

	if ($password != $password2) {
		$errors['password'] = "Password tidak sama.";

	}

	// first check the database to make sure 
	// a user does not already exist with the same nama and/or email
	$user_check_query = "SELECT * FROM users WHERE nama='$nama' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user) { // if user exists
		if ($user['nama'] === $nama) {
			$errors['nama'] = "Nama Telah Digunakan.";
		}

		if ($user['email'] === $email) {
			$errors['email'] = "Email Telah Digunakan.";
			
		}
	}

	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password); //encrypt the password before saving in the database

		$query = "INSERT INTO users (nama, email, password) 
  			  VALUES('$nama', '$email', '$password')";
		mysqli_query($db, $query);
		$_SESSION['nama'] = $nama;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}
}

// LOGIN USER
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
  
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
  
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
		  $_SESSION['email'] = $email;
		  $_SESSION['success'] = "You are now logged in";
			while($row=$results->fetch_assoc()){
				$_SESSION['role'] = $row['role'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['users'] = $row;
				
			}
		  header('location: index.php');
		}else {
			$errors['akun'] = "Email atau password salah!.";
		}
	}

  }
?>