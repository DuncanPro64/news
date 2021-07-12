<?php

	session_start();
	require('../connection.php');
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	$email =trim($email);
    $password =trim($password);

    $email =mysqli_real_escape_string($con,$email);
    $password =mysqli_real_escape_string($con,$password);

    $query = "SELECT email,password FROM editor WHERE email='$email'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    if ($result == TRUE) {
    	$row = mysqli_fetch_assoc($result);
    	$hash = $row['password'];

    	if(password_verify($password, $hash)){
    		$_SESSION['username']=$email;
    		header('Location:index.html');
    		exit();
    }else{
    	echo "wrong credentials";
    }
}else{
	echo "Invalid email";
}


?>