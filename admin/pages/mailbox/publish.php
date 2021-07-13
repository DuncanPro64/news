<?php

session_start();
include('../../../connection.php');
if (isset($_POST['publish'])) {
	// if (isset($_SESSION['username'])) {

	// $email = $_SESSION['username'];
	
	if (1== 1) {
		$email = "oluochp6@gmail.com";
		$query = "SELECT * FROM editor WHERE email= '$email'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));

		$row = mysqli_fetch_assoc($result);

		$category = $row['category'];
		$sql = "SELECT cat_id FROM category WHERE cat_name='$category'";
		$try = mysqli_query($con,$sql) or die(mysqli_error($con));
		$category_result = mysqli_fetch_assoc($try);
		// category id
		$cat_id = $category_result['cat_id'];
		// editor id
		$editor_id = $row['email'];
		$content = $_POST['content']; 
		$article_title = $_POST['title']; 
		// echo $cat_id;
		// $cat_id = (int)$cat_id;
		

		$content = $_POST['content']; 
		$query = "INSERT INTO article (article_title,content,category_id,editor_id) VALUES('$article_title','$content','$cat_id','$editor_id')";
		$insert = mysqli_query($con,$query) or die(mysqli_error($con));

		
	}else{
		header('location:../../login.php');
	}
	
	// }else{
	// 	echo "no session live";
	// }

}


















 ?>