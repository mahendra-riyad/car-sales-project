<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $(.btn-danger).onclick(function(){
       // $(this).css('color','green');
         $(this).toggleClass('red');
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".view-details").click(function(){
    var v=$(this).attr("id");
    $.post("user-car-block.php",{user_code:v},function(data){
      if(data=='success'){
        $("#"+v).text("UnBlock");
          $("#"+v).css("background-color","green");
      }
      else{
        $("#"+v).text("Block");
          $("#"+v).css("background-color","#B70000");
      }
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
  margin-left: 15%;
 
  padding: 40px;
  margin-top:110px;
  min-width: 300px;
  height:100%;
  padding-left: 3%;
  
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

<style>
.row:hover {
background-color:#000000;
box-shadow:.5px .5px .5px .5px #B70000;
transition:1s;
}
.view-details {
color:#FFFFFF;
background-color:#A60000;
width:100%;
padding:10px;
border:none;
border-radius:4px;
font-size:16px;
}
.view-details:hover {
background-color:#FFFFFF;
color:#000000;
transition:1s;

}
.view-details1,.view-details2 {
color:#FFFFFF;
background-color:#000000;
width:100%;
padding:10px;
border:none;
border-radius:4px;
font-size:16px;
margin-left: 15px;
width: 47%;
}
</style>
</head>
<body style="background-color:#202020;">

<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
  <a href="logout.php" style="float:right;"><button id="login" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span> Log-out</button></a>
</div>
<ul>
  <li><a  href="#home" style="text-decoration:none;">Home</a></li>
  <li><a href="user.php" class="active" style="text-decoration:none;">USER</a></li>
  <li><a href="car_add.php" style="text-decoration:none;">NEW CAR</a></li>
  <li><a href="add_new_car.php" style="text-decoration:none;">ADD CAR DETAILS</a></li>
  
</ul>
<?php 
if(!isset($_COOKIE["admin"])){
	header("location:index.php?cookie=1");
} 
else {
?>
<div class="middle">
  <p style="font-size: 20px; font-weight: lighter; letter-spacing: 2px; word-spacing: 4px; color:#0099FF;  font-family: Raleway;">User Details :-
  <?php
  $user_code=$_GET["id"];
    include("db.php");
     $aa=mysqli_query($con,"select * from user_login where user_code='$user_code'");
     if($a=mysqli_fetch_array($aa)){
     $name=$a[2];
   } ?>
   <b style="float: right;  color:#B70000;"><?=$name ?></b>
  </p><br>
  <?php
    $rs=mysqli_query($con,"select * from car_short_details where user_code='$user_code'");
    while($r=mysqli_fetch_array($rs))
    {
      $car_code=$r[1];
  ?>  <div class="back"><div class="row" style="padding:10px; background-color:#101010; margin-bottom:10px; margin-left:0px; margin-right:0px;"><div class="col-sm-4"><a href="view_details.php?id=<?=$r[1]?>"><img src="uploads/<?=$r[1]?>0.JPG" style="height:190px; width:100%;"></a></div><div class="col-sm-5" style="border-right-color:#CCCCCC; border:groove; border-bottom:none; border-top:none;border-left:none; border-width:1px;"><b style="text-transform:capitalize; color:#FFFF9D; border-color:#CCCCCC;font-size:20px;">
  <?=$r[2]?> <?=$r[3]?> <?=$r[4]?></b><p style="color:#CCCCCC; font-size:16px; margin-top:10px;"><?=$r[6]?> Miles</p>
  <p style="color:#CCCCCC; text-transform:capitalize;"><?=$r[11]?> , <?=$r[12]?> - <?=$r[13]?></p>
  <div class="col" style="border-color:#CCCCCC; border:groove; border-bottom:none; border-right:none;border-left:none; border-width:1px;">
<?php
  $aa=mysqli_query($con,"select * from add_details where car_code='$r[1]'");
    while($a=mysqli_fetch_array($aa)){

    ?>
    <p style="color:#CCCCCC; font-size:18px; padding-top:10px; text-transform:uppercase;"><?=$a[1]?> !</p>
    <P style="color:#CCCCCC;margin-top:15px;"><?=$a[14]?></P>
    <?php
    }
 ?>

  </div></div><div class="col-sm-3" style="padding:20px; padding-left:30px;"><b style="font-size:24px; color:#FFFF9D;">$ <?=$r[5]?></b><br>
  <p style="color:#CCCCCC; font-size:14px; margin-top:10px;">Drive: <?=$r[10]?></p>
  <p style="color:#CCCCCC; font-size:14px; margin-top:10px;"><b><?=$r[9]?> , <?=$r[8]?></b></p><br>
    <?php if($r[17]==1){ ?>
           <button class="view-details" id="<?=$r[1]?>">Block</button>
            <?php }
            else { ?>
               <button class="view-details" id="<?=$r[1]?>" style="background-color: green;">UnBlock</button>
          <?php  } ?>
 
  </div>
 
</div></div>

  <?php
    } ?>
</div>
<?php
}
?>
</div>

</body>
</html>