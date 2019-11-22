<?php 
$name=$_REQUEST["name"];
$email_sender=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$comment=$_REQUEST["comment"];
$car_code=$_REQUEST["car_code"];
$cookie=$_REQUEST["user_code"];
include("db.php");
$rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");
if($r=mysqli_fetch_array($rs)){
	$email_reciver_code=$r["16"];
}
if($cookie==$email_reciver_code){
	echo "This is your car";
}
else{
	mysqli_query($con,"insert into inbox values ('$email_reciver_code','$email_sender','$name',$phone,'$comment','$car_code')");
	echo "Message Send";
}
