<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $("select.make").change(function(){
        var selectedmake = $(".make option:selected").val();
        $.post("selectedmake.php",{make : selectedmake},function(data){
            $("#modal").html(data);
        });
    });
});

</script>
<style>
.header {
    background-color:#101010;
    top: 0px;
 padding: 20px;
    text-align: left;
	font-family:Geneva;
	position:fixed;
	width:100%;
	border-bottom:#999999 groove .5px;
	
}
#logo {
  font-family: 'Open Sans', sans-serif;
  color: #555;
  text-decoration:none;
  text-transform:capitalize;
  font-size:70px;
  font-weight: 800;
  letter-spacing: -3px;
  line-height: 1;
  text-shadow:#CC9933 5px 3px 0;
  position:relative;
}
ul {
    list-style-type: none;
    padding: 0;
    width: 15%;
    background-color: #101010;
	position:fixed;
    height: 100%;
	top:110px;
   text-transform:uppercase;
    
}

li a {
    display: block;
    color:#FFFFFF;
    padding: 10px 15px;
    text-decoration:none;
	width:100%;
	border-bottom:#FFFFFF groove .2px;
	font-size:18px;
 
  letter-spacing: 1px;
  word-spacing: 2px;
  font-weight: lighter;
}

li a.active {
    background-color:#B70000;
    color: white;
}

li a:hover:not(.active) {
   background-color:#B70000;
    color: white;
	transition:1s;
}

#login {
font-size:20px;
background-color:#101010;
color:#CCCCCC;
padding:10px;
margin:10px;
border:none;
border-radius:6px;
}
#login:hover {
color:#FFFFFF;
background-color:#B70000;
transition:.5s;
box-shadow:#151515 1px 1px;

}
.middle {
background-color: #181818;
  margin-left: 20%;
  font-family: Raleway;
  padding: 40px;
  margin-top:110px;
  min-width: 300px;
  height:100%;
  
}
input {
  padding: 10px;
  width: 80%;
  font-size: 17px;
  font-family: Raleway;
  color:#FFFFFF;
  background-color:#202020;
  border:none;
  margin-bottom:10px;
}
</style>
</head>
<body style="background-color:#202020;">

<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
  <a href="logout.php" style="float:right;"><button id="login" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span> Log-out</button></a>
</div>
<ul>
  <li><a class="active" href="#home" style="text-decoration:none;">Home</a></li>
  <li><a href="user.php" style="text-decoration:none;">USER</a></li>
  
  <li><a href="add_new_car.php" style="text-decoration:none;">Add Car Details</a></li>
  <li><a href="direct-contact.php" style="text-decoration:none;">direct contact</a></li>
  <li><a href="message.php" style="text-decoration:none;">Message</a></li>
</ul>
<?php 
if(!isset($_COOKIE["admin"])){
	header("location:index.php?cookie=1");
} 
else {
?>
<div class="middle">

</div>
<?php

}
?>

</div>
</body>
</html>