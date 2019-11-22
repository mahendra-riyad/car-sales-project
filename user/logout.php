<?php 
	setcookie("admin","",time()+60);
	header("location:sign_up.php?id=logout");
 ?>