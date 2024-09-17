<?php

include "connection.php";
$article_id = $_POST['postid'];

$updatequery = "UPDATE article SET likes=likes+1 where article_id=$article_id";
mysqli_query($con,$updatequery) or die(mysqli_error($con));

// count numbers of likes in post


$query = "SELECT likes AS cntUnlike FROM article WHERE article_id=$article_id";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$fetchlikes = mysqli_fetch_array($result)or die(mysqli_error($con));
$totallikes = $fetchlikes['cntUnlike'];

// initalizing array
$return_arr = array("likes"=>$totallikes);

echo json_encode($return_arr);

?>