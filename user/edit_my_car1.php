<?php 
if (isset($_POST['submit'])) {
		$car_code=$_GET["id"];
		$year=$_POST["year"];
		$car_name=$_POST["car_name"];
		$car_modal=$_POST["car_modal"];
		$dollar=$_POST["dollar"];
		$miles=$_POST["miles"];
		$modal=$_POST["modal"];
		$state=$_POST["state"];
		$city=$_POST["city"];
		$drive=$_POST["drive"];
		$transmission=$_POST["transmission"];
		$exterior=$_POST["exterior"];
		$inerior=$_POST["inerior"];
		$stock=$_POST["stock"];
		$vin=$_POST["vin"];
		$status=1;
		include("db.php");
		mysqli_query($con,"update car_short_details set ( year='$year' , car_name ='$car_name',car_modal='$car_modal', dollar='$dollar',miles='$miles',modal='$modal',state='$state',city='$city',drive='$drive',transmission='$transmission',exterior='$exterior',inerior='$inerior',stock='$stock',vin='$vin' ) where car_code='$car_code' ");



	/* add_details */
	$listing=$_POST["listing"];
	$engine_type=$_POST["engine_type"];
	$cylinder=$_POST["cylinder"];
	$engine_size=$_POST["engine_size"];
	$fuel_capacity=$_POST["fuel_capacity"];
	$wheel_base=$_POST["wheel_base"];
	$overall_length=$_POST["overall_length"];
	$width=$_POST["width"];
	$height=$_POST["height"];
	$curb_weight=$_POST["curb_weight"];
	$leg_room=$_POST["leg_room"];
	$head_room=$_POST["head_room"];
	$seating_capacity=$_POST["seating_capacity"];
	$features=$_POST["features"];
	$description=$_POST["description"];

	include("db.php");
	mysqli_query($con,"update add_details set ( listing_title='$listing',engine_type='$engine_type',cylinder='$cylinder',engine_size=$engine_size,fuel_capacity='$fuel_capacity',wheel_base=$wheel_base,overall_length=$overall_length,width=$width,height=$height,curb_weight=$curb_weight,leg_room='$leg_room',head_room='$head_room'seating_capacity='$seating_capacity',features='$features',description='$description' )
		where car_code='$car_code'");
	header("location:edit_my_car.php?id=$car_code");

}
 ?>