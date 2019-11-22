<?php 
if(isset($_REQUEST["user_code"])){
	$car_code=$_REQUEST["user_code"];
	include("db.php");

	$rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");
	if($r=mysqli_fetch_array($rs)){
		if($r[17]==1){
			mysqli_query($con,"update car_short_details set status=0 where car_code='$car_code'");
			echo "success";
		}
		else{
		mysqli_query($con,"update car_short_details set status=1 where car_code='$car_code'");
			echo "succes";
		}
	}
 }
?>