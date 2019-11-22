<?php 
	if($_REQUEST["delete"]){
		$car_code=$_REQUEST["delete"];
		$rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");

		include("db.php");
		mysqli_query($con,"delete from car_short_details where car_code='$car_code'");
		mysqli_query($con,"delete from add_details where car_code='$car_code'");
	}
 ?>