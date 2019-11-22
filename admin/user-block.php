<?php 
if(isset($_REQUEST["user_code"])){
	$user_code=$_REQUEST["user_code"];
	include("db.php");

	$rs=mysqli_query($con,"select * from user_login where user_code='$user_code'");
	if($r=mysqli_fetch_array($rs)){
		if($r[5]==0){
			mysqli_query($con,"update user_login set status=1 where user_code='$user_code'");
			echo "success";
		}
		else{
			mysqli_query($con,"update user_login set status=0 where user_code='$user_code'");
			echo "succes";
		}
	}
 }
?>