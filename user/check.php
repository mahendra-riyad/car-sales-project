<?php 
if(empty($_POST["email_id"])||empty($_POST["password"])||empty($_POST["user_name"])){
	header("location:sign_up.php?id=all_field_require");
 }
 else{
 	$email_id=$_POST["email_id"];
 	$password=$_POST["password"];
 	$user_name=$_POST["user_name"];
 	$count=0;
 	$status=0;
 		include("db.php");
		//	serial number
		$sn=0;
		$rs=mysqli_query($con,"select max(sn) from user_login");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn=$sn+1;

 		$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
		$b=array_rand($a,5);
		$user_code="";
		for($i=0;$i<sizeof($b);$i++){
			$user_code=$user_code.$a[$b[$i]]."_".$sn;
		}

 	$rs=mysqli_query($con,"select * from user_login where email_id='$email_id'");
 	if($r=mysqli_fetch_array($rs)){
 		$count++;
 		}
 	if($count==0){
 		mysqli_query($con,"insert into user_login values($sn,'$user_code','$user_name','$email_id','$password',$status)");
 			setcookie("user",$user_code,time()+3600);
 			header("location:profile.php");
 	}
 	else{
 		header("location:sign_up.php?id=email_already_present");
 	}
 }
 ?>
