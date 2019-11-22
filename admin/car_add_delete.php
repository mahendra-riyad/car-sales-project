<?php 
	if($_REQUEST["delete"]){
		$car_code=$_REQUEST["delete"];
		$rs=mysqli_query($con,"select * from new_car where car_code='$car_code'");

		include("db.php");
		mysqli_query($con,"delete from new_car where car_code='$car_code'");
	}
 ?>