<?php 
	if (empty($_POST["email_id"])||empty($_POST["password"])) {
		header("location:sign_up.php?all=1");
	}
	else{
		$email_id=$_POST["email_id"];
		$password=$_POST["password"];
		include("db.php");
		$rs=mysqli_query($con,"select * from user_login where email_id='$email_id'");
 	if($r=mysqli_fetch_array($rs)){
 		if($r[4]==$password){
 				setcookie("user",$r[1],time()+3600);
 			header("location:profile.php");
 		}
 		else{
 			header("location:sign_up.php?id=wrong_password");
 		}
	}
	}
 ?>