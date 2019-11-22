<?php 
	if($_REQUEST["car_code"]){
		$car_code=$_REQUEST["car_code"];

		include("db.php");
		$rs=mysqli_query($con,"select * from new_car where car_code='$car_code'");
		if($r=mysqli_fetch_array($rs)){
		?> <input type="text" name="new_car" value="<?=$r[2]?>" id="new_car"><br>
		<?php
		}
	}
?>
