<?php

if (isset($_POST['submit'])) {

	if(!isset($_COOKIE["user"])){
	header("location:sign_up.php?cookie=1");
}
else {
	
		$admin_code=$_COOKIE["user"];

    $count = 0;
    	include("db.php");
		//	serial number
		$sn=0;
		$rs=mysqli_query($con,"select max(sn) from car_short_details");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;

	//  random code genrate

		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		$b=array_rand($a,5);
		$car_code="";
		for($i=0;$i<sizeof($b);$i++){
			$car_code=$car_code.$a[$b[$i]]."_".$sn;
		}

	$target_path = "uploads/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array
$target_dir = "uploads/";
$img=$car_code.$i.".jpg";
$target_file=$target_dir.$img;
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file)){
    $count++;
}
}
if($count !=0){
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

		mysqli_query($con,"insert into car_short_details values($sn,'$car_code','$year','$car_name','$car_modal','$dollar','$miles','$modal','$state','$city','$drive','$transmission','$exterior','$inerior','$stock','$vin','$admin_code',$status) ");

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
	mysqli_query($con,"insert into add_details values('$car_code','$listing','$engine_type','$cylinder',$engine_size,'$fuel_capacity',$wheel_base,$overall_length,$width,$height,$curb_weight,'$leg_room','$head_room','$seating_capacity','$features','$description',$status)");
	header("location:sell_your_car.php?id=success");
}
}
}
 ?>
