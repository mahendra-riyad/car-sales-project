<?php 
$name=$_REQUEST["name"];
$email_sender=$_REQUEST["email"];
$phone=$_REQUEST["phone"];
$comment=$_REQUEST["comment"];

		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"car sales");
 mysqli_query($con,"insert into contact values ('$email_sender','$name',$phone,'$comment')");

  echo "Message Send";

?>
