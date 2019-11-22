<?php 
	if($_REQUEST["car_code"]){
		$car_code=$_REQUEST["car_code"];
		$user_code=$_COOKIE["user"];
		include("db.php");
		$rs=mysqli_query($con,"select * from favourite where car_code='$car_code' AND user_code='$user_code'");
		if($r=mysqli_fetch_array($rs)){
			echo "car already saved";
		}
		else {
			mysqli_query($con,"insert into favourite values ('$car_code','$user_code')");
			echo "car added to favourite";
		}
	}
 ?>