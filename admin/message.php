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
<script type="text/javascript">
   $(document).ready(function(){
    $("#form_submit").click(function(){
       
      var name1=$("#name").val();
      var email1=$("#email_id").val();
      var phone1=$("#phone").val();
      var comment1=$("#comment").val();  
      var car_code1=$("#car_code").val();
      var user_code1=$("#u_code").val();
     var data1='name='+name1 + '&email='+email1 + '&phone='+phone1 + '&comment='+comment1 + '&car_code='+car_code1 + '&user_code='+user_code1;
      $.ajax({
            type: "POST",
            url: "message1.php",
            data: data1
        }).done(function(data){
            alert(data);
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
<style type="text/css">
  .tab {
    overflow: hidden;
    background-color: #151515;
}

/* Style the buttons inside the tab */
.tab button {
    background-color:#151515;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
  padding-left:30px;
  padding-right:30px;
    transition: 0.3s;
    font-size: 17px;
  opacity:.8;
  color:#FFFFFF;
  border-right:#FFFFFF solid 1px;
  
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #000000;
  opacity:1;
  border-bottom:none;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color:#000000;
  opacity:1;
  border-bottom:none;
  
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding:30px;
  background-color:#151515;
    border-top: none;
  color:#FFFFFF;
}
.form_submit {
      background-color:#B70000;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.7;
  width:30%;
  margin-left: 70%;
  margin-bottom: 40px;
  
}

.form_submit:hover {
    opacity: 1;
  background-color:#B70000;
    transition: 1s;
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
  <li><a href="user.php" style="text-decoration:none;">USER</a></li>
  
  <li><a href="add_new_car.php" style="text-decoration:none;">Add Car Details</a></li>
  <li><a href="direct-contact.php" style="text-decoration:none;">direct contact</a></li>
  <li><a href="message.php" style="text-decoration:none;" class="active">Message</a></li>
</ul>
<?php 
if(!isset($_COOKIE["admin"])){
	header("location:index.php?cookie=1");
} 
else {
$user_code='x_';
$user_email=$_COOKIE["admin"];
?>

<div class="middle">

 <div class="tab">
  <button class="tablinks" onClick="openCity(event, 'Recived')" id="defaultOpen">Message Recived</button>
  <button class="tablinks" onClick="openCity(event, 'Send')">Message Send</button>
</div>

<div id="Recived" class="tabcontent">
  <?php
  include("db.php");
  $count=0;
  $rs=mysqli_query($con,"select * from inbox where email_reciver='$user_code'");
  while ($r=mysqli_fetch_array($rs)) {
    $count++;
  ?>
  <div style="background-color: #000000; margin-bottom: 10px; padding: 20px;">
  <p>Send By:- <?=$r[1]?></p>
  <?php 
    $aa=mysqli_query($con,"select * from user_login where email_id='$r[1]'");
    if($a=mysqli_fetch_array($aa)){
      $reciver_code=$a[1];
    }
    ?>
  <p> Name:- <strong><?=$r[2]?></strong> </p><p>   Phone No:-<?=$r[3]?></p>
  <p>Message:- <br><br><b style="font-size: 16px; word-spacing: 2px; letter-spacing: 1px;"><?=$r[4]?></b></p><br>
      <input type="text" id="u_code" style="display: none;" value="<?=$reciver_code?>" >
    <input type="text" id="car_code" style="display: none;" value="<?=$r[5]?>" >
    <input type="text" id="name" name="name" style="display: none;" value="<?=$user_name?>" >
    <input type="text" name="email" id="email_id" style="display: none;" value="<?=$user_email?>" >
    <textarea rows="10" style="width: 100%; background-color: #000000; color:white; border:red 1px groove; border-radius: 10px;"  name="comment" id="comment"></textarea><br>
    <button class="form_submit" id="form_submit">Replies</button>
</div>
  <?php}
  ?>
    <?php
  if($count==0){
  ?> <p style="font-size: 16px; word-spacing: 2px; letter-spacing: 1px;">No messages Here</p>
  <?php
  }
  ?>
</div>
<div id="Send" class="tabcontent">
  <?php
  $count=0;
  $rs=mysqli_query($con,"select * from inbox where email_sender='$user_email'");
  while ($r=mysqli_fetch_array($rs)) {
    $count++;
  ?>
  <div style="background-color: #000000; margin-bottom: 10px; padding: 20px;">
  <p>Message:- <br><br><b style="font-size: 16px; word-spacing: 2px; letter-spacing: 1px;"><?=$r[4]?></b></p><br>

  <?php
  $aa=mysqli_query($con,"select * from inbox where car_code='<?=$r[5]?>' AND email_reciver='$user_code'");
  while ($a=mysqli_fetch_array($aa)) {
    ?>
    <div style="background-color: #101010; margin-bottom: 10px; padding: 20px;">
    <p>Send By:- <?=$a[1]?></p>
  <p> Name:- <strong><?=$a[2]?></strong> </p><p>   Phone No:-<?=$a[3]?></p>
    <p>Replies:- <br><br><b style="font-size: 16px; word-spacing: 2px; letter-spacing: 1px;"><?=$a[4]?></b></p>
  </div>
    <?php
  }
  ?>
</div>
  <?php }
  ?>
    <?php
  if($count==0){
  ?> <p style="font-size: 16px; word-spacing: 2px; letter-spacing: 1px;">No messages Here</p>
  <?php
  }
  ?> 
</div>
<?php
}
}
?>

</div>
<script>
function openCity(evt, Name) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>