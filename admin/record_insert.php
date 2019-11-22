<?php 
if(!isset($_COOKIE["admin"])){
	header("location:index.php?cookie=1");
}
else{
	
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


		$target_dir = "uploads/";
$img=$car_code.".jpg";
$target_file=$target_dir.$img;
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
	mysqli_query($con,"insert into car_short_details values($sn,'$car_code','$year','$car_name','$car_modal','$dollar','$miles','$modal','$state','$city','$drive','$transmission','$exterior','$inerior','$stock','$vin') ");
	header("location:main_page.php?success=1");
}
else{
	echo "failed";
}	
}
