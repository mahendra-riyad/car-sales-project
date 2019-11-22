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
    $(".btn.btn-default").click(function(){
      var v=$("#new_car").val();
      $.post("car_add_1.php",{new_car:v},function(data){  
        if(data=='THESE CAR COMPANY ALREDY INSERTED')
        {
          $("#msg1").html(data);
        } 
        else       
        $("#msg").append(data); 
      });
      
    });
  });
  </script>

<script>
    /*$("button").click(function(){*/
    $(document).on("click",".btn.btn-danger",function(){
      var v=$(this).attr("id");
      $.post("car_add_delete.php",{delete:v},function(data){
        $("#r"+v).fadeOut(1000);
      });
    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click",".btn.btn-edit",function(){
      var v=$(this).attr("id");
      $.post("car_add_edit.php",{car_code:v},function(data){    
        $("#new_car").fadeOut(); 
        $("#new_car1").html(data);
        $(".btn.btn-default").fadeOut(100);
        $(".btn.btn-update").fadeIn(100);
      });
    });
  });
</script>
<style>
.header {
    background-color:#101010;
 padding: 20px;
    text-align: left;
	font-family:Geneva;
	position:fixed;
	width:98%;
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
    width: 20%;
    background-color: #101010;
	position:fixed;
    height: 100%;
	top:110px;
    
}

li a {
    display: block;
    color:#FFFFFF;
    padding: 20px 30px;
    text-decoration:none;
	width:100%;
	border-bottom:#FFFFFF groove .2px;
	font-size:18px;
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
#btn {
font-size:17px;
background-color:#101010;
color:#CCCCCC;
padding-left:40px;
padding-right:40px;
padding-top:10px;
padding-bottom:10px;
margin-top:10px;
border:solid 1px;
border-color:#101010;
border-radius:0px;
margin-left:30%;

}
#btn:hover{
border-color:#B70000;
transition:1s;
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
}
select {
  padding: 10px;
  width: 80%;
  font-size: 17px;
  font-family: Raleway;
  color:#FFFFFF;
  background-color:#202020;
  border:none;
}
#msg {
width:80%;
border:#B70000 solid .5px;
height:100px;
}
</style>
</head>
<body style="background-color:#202020;">
<div class="container-fluid">
<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
  <a href="logout.php" style="float:right;"><button id="login" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span> Log-out</button></a>
</div>
<ul>
  <li><a  href="main_page.php" style="text-decoration:none;">Home</a></li>
  <li><a href="#" style="text-decoration:none;">USER</a></li>
  <li><a href="car_add.php" style="text-decoration:none;" class="active">NEW CAR</a></li>
  <li><a href="add_new_car.php" style="text-decoration:none;">ADD CAR DETAILS</a></li>
  
</ul>
<?php 
if(!isset($_COOKIE["admin"])){
	header("location:index.php?cookie=1");
} 
else {
?>
	 <div class="middle">
	<input type="text" name="new_car" placeholder="ADD NEW CAR COMPANY" id="new_car"><br>
  <div id="new_car1"></div>
	<button class="btn btn-default" id="btn">ADD CAR</button>
	<button class="btn btn-update" id="btn" style="display:none;">UPDATE</button>
  <div id="msg1" style="text-align:center; color:#FFFFFF;width:80%;"></div>
  <table id="msg" class="table table-responsive">
    <?php
    include("db.php");
     $aa=mysqli_query($con,"select * from new_car");
      while($a=mysqli_fetch_array($aa)){
?>
    
        <tr id="r<?=$a[1] ?>" style="text-align:center; border-collapse:collapse; border-top:none;"><td style="padding-top:15px; color:#FFFFFF;"><?=$a[2]?></td><td><button id="<?=$a[1] ?>" class="btn btn-danger">delete</button></td><td><button id="<?=$a[1] ?>" class="btn btn-edit">edit</button></td></tr>    
<?php
      }
  ?>
  </table>
<p style="margin-top:40px; color:#FFFFFF; font-size:18px;">ADD CAR NEW MODAL :-</p>
<form method="post" action="#">
<select name="car_company">
<option>SELECT CAR COMPANY</option>

<?php 
$aa=mysqli_query($con,"select * from new_car");
while($a=mysqli_fetch_array($aa)){
?>
<option value="<?=$a[2]?>"><?=$a[2]?></option>
<?php
}
?>
</select><br>
<!--<input type="text" name="car_modal" id="car_modal" placeholder="ENTER NEW CAR MODAL..."><br>
<input type="submit" value="MODEL INSERT" id="modal_insert"><br>  -->
</form>
</div>
<?php

}
?>
</div>
</body>
</html>