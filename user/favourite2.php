<?php 
	if($_REQUEST["car_code"]){
		$car_code=$_REQUEST["car_code"];
		$user_code=$_COOKIE["user"];
		include("db.php");
			mysqli_query($con,"delete from favourite where car_code='$car_code' AND user_code='$user_code'");
			echo "car removed";
	}
 ?>