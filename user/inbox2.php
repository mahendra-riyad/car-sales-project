<?php 
$name=$_REQUEST["name"];
$email_sender=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$comment=$_REQUEST["comment"];
$car_code=$_REQUEST["car_code"];
$cookie=$_REQUEST["user_code"];
include("db.php");

	mysqli_query($con,"insert into inbox values ('$cookie','$email_sender','$name',$phone,'$comment','$car_code')");
	echo "Message Send";

