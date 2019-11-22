<?php 
	setcookie("admin","",time()+60);
	header("location:index.php?id=logout");
 ?>