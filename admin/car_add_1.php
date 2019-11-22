<?php 
	if($_REQUEST["new_car"]){
		$new_car=$_REQUEST["new_car"];
		include("db.php");
	//	serial number
		$sn=0;
		$count=0;
		$rs=mysqli_query($con,"select max(sn) from new_car");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;

	//  random code genrate

		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		$b=array_rand($a,5);
		$random_code="";
		for($i=0;$i<sizeof($b);$i++){
			$random_code=$random_code.$a[$b[$i]]."_".$sn;
		}
	// code insert.
		$rs=mysqli_query($con,"select * from new_car");
		while($r=mysqli_fetch_array($rs)){
			if($r[2]==$new_car){
				$count++;
			}
		}
		if($count==0){
		mysqli_query($con,"insert into new_car values($sn,'$random_code','$new_car')");

				$aa=mysqli_query($con,"select * from new_car");
			if($a=mysqli_fetch_array($aa)){
?>
		
			  <tr id="r<?=$a[1] ?>" style="text-align:center; border-collapse:collapse;"><td style="padding-top:15px; color:#FFFFFF;"><?=$a[2]?></td><td><button id="<?=$a[1] ?>" class="btn btn-danger">delete</button></td><td><button id="<?=$a[1] ?>" class="btn btn-edit">edit</button></td></tr>   
<?php
			}
		}

		else{
			echo "THESE CAR COMPANY ALREDY INSERTED";
		}

  }
 ?>