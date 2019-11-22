<!DOCTYPE html>
<html>
<head>
  <title> AutoTrader</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="script.js"></script>
    
    <!-------Including CSS File------>
      
        
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
<script>
$(document).ready(function(){
    $(".carousel-inner").mouseover(function(){
        $(".carousel-caption").fadeOut(1000);
    });
    $(".carousel-inner").mouseout(function(){
        $(".carousel-caption").fadeIn(1000);
    });
});
</script>

<script type="text/javascript">
 $(document).ready(function(){
    $("select.state").change(function(){
        var selectedstate = $(".state option:selected").val();
        $.post("selectedstate.php",{state : selectedstate},function(data){
            $("#response").html(data);
        });
    });
});

</script>
<script type="text/javascript">
 $(document).ready(function(){
    $("select.state1").change(function(){
        var selectedstate = $(".state1 option:selected").val();
        $.post("selectedstate.php",{state : selectedstate},function(data){
            $("#city1").html(data);
        });
    });
});

</script>
<script type="text/javascript">
 $(document).ready(function(){
    $("select.make1").change(function(){
        var selectedmake = $(".make1 option:selected").val();

        $.post("selectedmake.php",{make : selectedmake},function(data){
          $("#modaal").html(data);
        });
    });
});

</script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<style>
* {
    box-sizing: border-box;
}

/* Style the header */
.header {
    background-color:#202020;
 padding: 20px;
    text-align: left;
	
	font-family:Geneva;
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
  position: relative;
}
#logo:after {
  content:"dreamdealer";
  position: absolute;
  left: 8px;
  top: 32px;
}
#logo:after {
  /*background: url(https://subtlepatterns.com/patterns/crossed_stripes.png) repeat;*/
  background-image: -webkit-linear-gradient(left top, transparent 0%, transparent 25%, #555 25%, #555 50%, transparent 50%, transparent 75%, #555 75%);
  background-size: 4px 4px;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  z-index: -5;
  display: block;
  text-shadow: none;
}
/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color:#000000;
  padding:5px;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  border-right:outset 1px;
  border-right-color:#999999;
  border-radius: 4px;
}

/* Change color on hover */
.topnav a:hover{
background-color:#B70000;
transition: 1s;

}
.active{
background-color:#B70000;
}
.column {
	margin-top:20px;
    float: left;
    width: 25%;
    padding: 25px;
	background-color:#181818;
	border-radius:2px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.column.middle {
    width: 73%;
	margin-left:20px;
	padding:0px;
  background-color: #101010;
  margin-bottom: 30px;

	
}

@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
	
}
.footer {
    background-color: #202020;
    padding: 10px;
	width:100%;
	
}
</style>
<style>
.form-control{
margin-top:10px;

}
.search{
font-size:20px;
text-decoration:none;
text-transform:uppercase;
color:#FFFFFF;
background-color:#B70000;
border-radius:2px;
text-align:center;
padding:10px;
 word-spacing: 2px;
  letter-spacing: 1px;
}
.row2 {

background-color:#363636;
margin-bottom:20px;
border-radius:2px;
margin-top:20px;
}
.col-sm-3 {

color:#FFFFFF;
}
</style>
<style>
.carousel-caption {
background-color:#000000;
color:#FFFFFF;
font-size:30px;
margin-bottom:30px;
opacity:.8;
border-radius:4px;
}
</style>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color:#000000;
  border:none;
  color:#FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width:100%;
  transition: all 0.5s;
  cursor: pointer;
  margin-right: 10px;
  word-spacing: 2px;
  letter-spacing: 1px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.0s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button:hover{
	  background-color:#b70000;
  transition:1s;
 }
.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<style>
.pannel{
border-radius:0 !important;
background-color:#101010;
}
.pannel:hover {
box-shadow:1px 1px 1px 1px #252525;
border:solid;
border:#CCCCCC;

}
</style>
<style>
.tags {
  list-style: none;
  margin: 0;
  overflow: hidden; 
  padding: 0;
}

.tags{
  float: left; 
}

.tag {
  border-radius: 3px 0 0 3px;  
  display: inline-block;
  height: 26px;
  line-height: 26px;
  padding: 0 20px 0 23px;
  position: relative;
  margin: 0px;
  text-decoration: none;
  -webkit-transition: color 0.2s;
    background-color: crimson;
  color: white;
  font-size:16px;
}
</style>
<style>
select {
    padding:15px;
    margin-top:5px;
  margin-bottom:5px;
    background:#101010;
    color:#FFFFFF;
    border:none;
  border-bottom:1px #000000 groove;
  width:100%;
  text-transform:uppercase;
  letter-spacing: 1px;
  word-spacing: 2px;
  font-weight: lighter;
}
select : focus,input:focus {
  outline: none;
}
.submit{
 padding:15px;
    margin-top:5px;
	margin-bottom:5px;
    background:#000000;
    color:#FFFFFF;
	border:none;
	width:100%;
	text-transform:uppercase;
	text-align:center;
  word-spacing: 2px;
  letter-spacing: 1px;
	}
/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
label {
 width:100%;
 color:#FFFFFF;
 text-transform:uppercase;
 }
 .weekofthedeal {
 background-color:#000000;
color:#FFFFFF;
font-size:20px;

opacity:.8;
border-radius:4px;
text-align:center;
}
</style>
<style>
#login {
font-size:20px;
background-color:#202020;
color:#CCCCCC;
padding:10px;
margin:10px;
border:#CCCCCC groove 1px;;
border-radius:6px;
}
#login:hover {
color:#FFFFFF;
background-color:#B70000;
transition:.5s;
box-shadow:#151515 1px 1px;

}
</style>
<style>
#myBtn {
  display: none;

  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 16px;
  border: none;
  outline: none;
  background-color:#B70000;
  color:#FFFFFF;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
  margin-left:27%;
}

#myBtn:hover {
  background-color:#FF0000;
}
</style>
<style>
#previus {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
	margin-left:80%;
	background-color:#000000;
}
#next {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
	margin-left:85%;
	background-color:#000000;
}

#next:hover {
    background-color: #ddd;
    color: black;
}
#previus:hover {
    background-color: #ddd;
    color: black;
}
.round {
    border-radius: 50%;
}
</style>
<style type="text/css">
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    margin-bottom: 15px;
    text-align: center;
    margin-left: 15%;
    margin-right: 15%;
	width:70%;
}

.icon {
    padding: 10px;
    background:#666666;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
  	border:none;
	background-color:#727272;
	color:#FFFFFF;	
}

.input-field:focus {
    border: 1px solid #000000;
}

/* Set a style for the submit button */
.btn2 {
    background-color:#000000;
    color: white;
	text-transform:uppercase;
    padding: 15px 20px;
    border: none;
    cursor: pointer;	
	border-radius:8px; 
	    margin-left: 15%;
    margin-right: 15%;
	width:70%;   
}

.btn2:hover {
    opacity: 1;
	color:#000000;
	background-color:#FFFFFF;
	
}
</style>
<style>
.input-container1 {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    margin-bottom: 15px;
    text-align: center;
    margin-left: 35px;
  width:70%;
}
.input-field1 {
    width: 100%;
    padding: 10px;
    border:none;
  background-color:#3F3F3F;
  color:#FFFFFF;  
}
.input-field2{
    width: 80%;
    padding: 10px;
    border:none;
  background-color:#3F3F3F;
  color:#FFFFFF;  
}

#regForm {
  background-color:#101010;
  font-family: Raleway;
  padding-left: 40px;
  padding-top:30px;
  margin:20px;
  margin-top:10px;
  min-width: 300px;
  height:100%;
 
}
select#reg,#modaal,#city1 {
  padding: 10px;
  width: 50%;
  font-size: 17px;
  font-family: Raleway;
  color:#FFFFFF;
  background-color:#202020;
  border:none;
  margin-bottom:10px;
  word-spacing: 2px;
  letter-spacing: 1px;
}
input#reg {
  padding: 10px;
  width: 80%;
  font-size: 17px;
  font-family: Raleway;
  color:#FFFFFF;
  background-color:#202020;
  border:none;
  margin-bottom:10px;
  word-spacing: 2px;
  letter-spacing: 1px;
}
textarea {
  padding: 10px;
  width:95%;
  font-size: 17px;
  font-family: Raleway;
  color:#FFFFFF;
  background-color:#202020;
  border:none;
  margin-bottom:10px;
  }

/* Mark input boxes that gets an error on validation: 
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
button {
  background-color:#000000;
  color:#FFFFFF;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  border-radius:4px;
  
}

button:hover {
background-color:#B70000;
transition:1s;
box-shadow:.5px .5px 1px 1px #202020;
}
.upload{
    background-color:#000000;
    border:1px solid #ff0000;
    color:#fff;
    border-radius:5px;
    padding:10px;
    text-shadow:1px 1px 0px green;
    box-shadow: 2px 2px 15px rgba(0,0,0, .75);
    width: 30%;
}
.upload:hover{
    cursor:pointer;
    background:#c20b0b;
    border:1px solid #c20b0b;
    box-shadow: 0px 0px 5px rgba(0,0,0, .75);
    transition: 1s;
}
#file{
    color:green;
    padding:5px; border:1px dashed #123456;
    background-color:black;
}
#upload{
    margin-left: 45px;
}
#img{ 
    width: 17px;
    border: none; 
    height:17px;
    margin-left: -20px;
    margin-bottom: 91px;
}
.abcd img{
    height:150px;
    width:150px;
    padding: 1px;
    border: 1px solid rgb(232, 222, 189);
}
</style>
<style>
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color:#B70000;
  transition:.5s;
}
</style>
<style type="text/css">
  
.notification {
  text-decoration: none;
  position: relative;
  display: inline-block;
  float: right;
  font-size:20px;
background-color:#202020;
color:#CCCCCC;
padding:10px;
margin:10px;
border-radius:6px;
}

.notification:hover {
  background:#B70000;
  color:white;
  text-decoration: none;
  transition:1s;
   opacity:.8;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background:#B70000;
  color: white;
}
</style><style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  float: right;
  padding:10px;
  margin-top: 0px;
margin-right: 20px;
margin-left: 20px;
 font-size:15px;
background-color:#202020;
color:#CCCCCC;
}

/* The actual popup */
.popup .popuptext {
 visibility: hidden;
  width: 120px;
  background-color:#151515;
  color: #fff;
  text-align: center;
  border-radius: 8px 8px 0px 0px;
  position: absolute;
  z-index: 1;
  top: 110%;
  left: 50%;
  margin-left: -60px;

}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent black transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

#car1 {
  background-color:#151515; margin-bottom:20px; margin-top:15px; padding:15px;
  text-decoration: none;
  padding-bottom: 0px;
  text-align: center;
}
#car1:hover {
 opacity: .6;
  border:1px #000000 ;
  transition: 1s;
  border-radius: 6px;
  text-decoration: none;
}
</style>
</head>
<body style="background-color:#202020;">  <?php
  if(isset($_COOKIE["user"]))
  {
    $user_code=$_COOKIE["user"];
  ?>
<div class="container-fluid">
<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
<!--  <a href="logout.php" style="float:right;"><button id="login" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a> -->
  <?php
  include("db.php");
  $rs=mysqli_query($con,"select * from user_login where user_code='$user_code'");
  if($r=mysqli_fetch_array($rs)){
  ?>
<div class="popup" onClick="myFunction1()">
  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Person" style=" border-radius: 50%; height: 50px; width: 50px;">
  <span class="popuptext" id="myPopup">
    <div style="margin: 0px; border-bottom: white groove 1px; padding: 10px;">
<b style="border:none; "><?=$r[2]?></b></div>
<div style="margin: 0px; border-bottom: white groove 1px; padding:10px;">
<i style="border:none;"><?=$r[3]?></i></div>
<div style="margin: 0px; border-bottom: white groove 1px;">
    <a href="logout.php"><button id="login"  style="width:100%; border:none; margin:0px; "> Logout</button></a>
  </div>
<div style="margin: 0px; border-bottom: white groove 1px;">
    <a href="#"><button id="login" style="width:100%; border:none; margin:0px; ">Password </button></a>
  </div></span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction1() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
  <?php
  }
  ?> 



  <a href="inbox1.php" class="notification">
  <span>Inbox</span>
  <?php 
  $count=0;
   $qq=mysqli_query($con,"select * from inbox where email_reciver='$user_code'");
  while($q=mysqli_fetch_array($qq)){
    $count++;
  }
  ?>
  <span class="badge"><?=$count?></span>
</a>
<a href="favourite1.php" id="logo" style="float: right; margin-right: 35px; margin-top: -15px;"><span class="glyphicon glyphicon-heart" style="font-size: 30px;"></span></a>
</div>
<div class="topnav">
  <a href="profile.php" >HOME</a>
  <a href="inventory1.php">INVENTORY</a>
  <a href="sell_your_car.php" class="active">SELL YOUR CAR</a>
  <a href="#">FINCANING</a>
  <a href="#">BLOG</a>
  <a href="contact.php">CONTACT US</a>
  <a href="my_car.php">MY CAR</a>
</div>
<div class="column">
<p class="search">SEARCH</p>
<form method="post" action="search.php">
<label>
  <select name="state" class="state">
  <option >select state</option>
  <option value="florida">Florida</option>
  <option value="georgia">Georgia</option>
  <option value="new jersey">New Jersey</option>
  <option value="tennessee">Tennessee</option>
  <option value="texas">Texas</option>
  <option value="virginia">Virginia</option>
</select></label>
<label><select name="city" id="response">
<option>select state first</option></select></label>

<label><select name="make" class="make">
  <option value="select make">select make</option>
  <option value="chrysler">Chrysler</option>
    <option value="chevrolet">chevrolet</option>
    <option value="honda">Honda</option>
    <option value="bmw">BMW</option>
    <option value="cadillac">Cadillac</option>
    <option value="jeep">Jeep</option>
    <option value="acura">Acura</option>
    <option value="Porsche">Porsche</option>
    <option value="mercedez benz">Mercedez Benz</option>
    <option value="audi">Audi</option>
    <option value="land rover">Land Rover</option>
    <option value="nissan">Nissan</option>
    <option value="infinity">Infinity</option>
</select></label>
<label><select name="modal" id="modal"></select></label>
<label><select name="fromyear" style="width:49%; margin-top:5px; float:left;">
		<option>From : Year</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
</select>
<select name="toyear" style="width:49%; margin-top:5px; float:left; margin-left:2%;">
		<option>To :Year</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
</select></label>
<label><select name="minimum" style="width:49%; margin-top:5px; float:left;">
<option>MIN PRICE </option>
<option value="0">$0</option>
<option value="10000">$10,000</option>
<option value="20000">$20,000</option>
<option value="30000">$30,000</option>
<option value="40000">$40,000</option>
<option value="50000">$50,000</option>
<option value="60000">$60,000</option>
<option value="70000">$70,000</option>
<option value="80000">$80,000</option>
<option value="90000">$90,000</option>
<option value="100000">$100,000</option>
<option value="110000">$110,000</option>
<option value="120000">$120,000</option>
<option value="130000">$130,000</option>
<option value="140000">$140,000</option>
<option value="150000">$150,000</option>
</select>
<select name="maximum" style="width:49%; margin-top:5px; float:left; margin-left:2%;">
<option>MAX PRICE </option>
<option value="0">$0</option>
<option value="10000">$10,000</option>
<option value="20000">$20,000</option>
<option value="30000">$30,000</option>
<option value="40000">$40,000</option>
<option value="50000">$50,000</option>
<option value="60000">$60,000</option>
<option value="70000">$70,000</option>
<option value="80000">$80,000</option>
<option value="90000">$90,000</option>
<option value="100000">$100,000</option>
<option value="110000">$110,000</option>
<option value="120000">$120,000</option>
<option value="130000">$130,000</option>
<option value="140000">$140,000</option>
<option value="150000">$150,000</option>
</select></label>
<label><select name="vehicletype">
	<option>vehicle type</option>
    <option value="luxury vehicles">luxury vehicles</option>
    <option value="hybrides">hybrides</option>
    <option value="minivans and vans">minivans and vans</option>
    <option value="pickup trucks">pickup trucks</option>
    <option value="sedans and couples">sedans and couples</option>
    <option value="diesel engines">diesel engines</option>
    <option value="sports utilities">sports utilities</option>
    <option value="sports cars">sports cars</option>
    <option value="wagons">wagons</option>
   <option value="other">other</option>
  </select></label>
 <label><input type="submit" value="search" class="button" style="margin-top:5px; vertical-align:middle; text-transform:uppercase;"></label>
</form>
<p class="search" style="margin-top:50px;">DEAL OF THE WEEK</p>
<div  id="weekofthedeal">
  <?php 
  $zz=mysqli_query($con,"select * from car_short_details");
  if($z=mysqli_fetch_array($zz)){
  ?>
    <a href="view_details1.php?id=<?=$z[1]?>"><img src="uploads/<?=$z[1]?>0.jpg" class="img-responsive"></a> 
<p style="margin-top:-25px; color:#FFFFFF;" class="weekofthedeal" > <?=$z[2]?> <?=$z[3]?> <?=$z[4]?>  <b style="color:#FFCC33;">  $<?=$z[5]?></b></p>
<?php  }
  ?>

</div>	
</div>



<div class="column middle">
<form id="regForm" action="sell_your_car_submit.php" method="post" enctype="multipart/form-data">
  <!-- One "tab" for each step in the form: -->
  <p style="color:#FFFFFF; font-size:30px;" >Sell Your Used Car</p>
  <p style="color:#FFFFFF; font-size:18px;" >Vehicle information :-</p>
   <select name="year" id="reg">
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
  </select><br>
  <select name="car_name" class="make1" id="reg">
    <option>select car make</option>
    <option value="chrysler">Chrysler</option>
    <option value="chevrolet">chevrolet</option>
    <option value="honda">Honda</option>
    <option value="bmw">BMW</option>
    <option value="cadillac">Cadillac</option>
    <option value="jeep">Jeep</option>
    <option value="acura">Acura</option>
    <option value="Porsche">Porsche</option>
    <option value="mercedez benz">Mercedez Benz</option>
    <option value="audi">Audi</option>
    <option value="land rover">Land Rover</option>
    <option value="nissan">Nissan</option>
    <option value="infinity">Infinity</option>
  </select><br>
  <select name="car_modal" id="modaal"></select><br>
  <input type="text" name="dollar" placeholder="Car rate in dollar..." id="reg"><br>
  <input type="text" name="miles" placeholder="Car running miles..." id="reg" ><br>
  <select name="modal"  id="reg">
    <option value="new">New</option>
    <option value="old">Old</option>
  </select><br>
  <select name="state" class="state1" id="reg">
  <option >select state</option>
  <option value="florida">Florida</option>
  <option value="georgia">Georgia</option>
  <option value="new jersey">New Jersey</option>
  <option value="tennessee">Tennessee</option>
  <option value="texas">Texas</option>
  <option value="virginia">Virginia</option>
</select></label>
<select name="city" id="city1">
<option>select state first</option></select>
  <select name="drive" id="reg">
    <option>Drive</option>
    <option value="convertibles">convertibles</option>
    <option value="crossovers">crossovers</option>
    <option value="luxury vehicles">luxury vehicles</option>
    <option value="hybrides">hybrides</option>
    <option value="minivans and vans">minivans and vans</option>
    <option value="pickup trucks">pickup trucks</option>
    <option value="sedans and couples">sedans and couples</option>
    <option value="diesel engines">diesel engines</option>
    <option value="sports utilities">sports utilities</option>
    <option value="sports cars">sports cars</option>
    <option value="wagons">wagons</option>
    <option value="4wd">4WD</option>
    <option value="awd">AWD</option>
  </select><br>
  <select name="transmission" id="reg">
    <option>select transmission</option>
    <option value="automatic">Automatic</option>
    <option value="manual">Manual</option>
    <option value="semi-auto">Semi-Auto</option>
    <option value="other">Other</option>
  </select><br>
  <input type="text" name="exterior" placeholder="Exterior color...." id="reg" ><br>
  <input type="text" name="inerior" placeholder="Inerior color...." id="reg" ><br>
  <input type="text" name="stock" placeholder="ENTER CAR STOCK..." id="reg" ><br>
  <input type="text" name="vin" placeholder="Enter VIN number..." id="reg" ><br>

<p style="color:#FFFFFF; font-size:18px;" >FULL SPECIFICATIONS :-</p>
  <input type="text" name="listing" placeholder="ENTEER LISTING TITLE..." id="reg" ><br>
  <input type="text" name="engine_type" placeholder="ENTER ENGINE TYPE..." id="reg" ><br>
  <input type="text" name="cylinder" placeholder="ENTER NO. OF CYLINDER IN CAR....." id="reg" ><br>
  <input type="text" name="engine_size" placeholder="ENGINE SIZE....." id="reg" ><br>
  <input type="text" name="fuel_capacity" placeholder="FUEL CAPACITY.." id="reg" ><br>
  <input type="text" name="wheel_base" placeholder="WHEEL BASE.." id="reg" ><br>
  <input type="text" name="overall_length" placeholder="OVERALL LENGTH..." id="reg" ><br>
  <input type="text" name="width" placeholder="WIDTH"  id="reg" ><br>
  <input type="text" name="height" placeholder="HEIGHT" id="reg" ><br>
  <input type="text" name="curb_weight" placeholder="CURB WEIGHT.." id="reg" ><br>
  <input type="text" name="leg_room" placeholder="LEG ROOM...." id="reg" ><br>
  <input type="text" name="head_room" placeholder="HEAD ROOM..." id="reg" ><br>
  <input type="text" name="seating_capacity" placeholder="SEATING CAPACITY(STD).." id="reg" ><br>
  <input type="text" name="features" placeholder="ENTER CAR FEATURES SEPARATE WITH COMMA...." id="reg" ><br>
  <textarea rows="10" cols="140" name="description" placeholder="FULL DESCRIPTION IN SHORT PARAGRAPH...."></textarea><br>

                  <p style="color:#FFFFFF; font-size:18px;" >IMAGES :-</p>
                    <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>

                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
                    <input type="submit" value="SUBMIT DETAILS" name="submit" id="upload" class="upload"/>
</form>
  </div></div>

<div class="container-fluid">
<div class="footer">
  <p class="search">FIND BY VEHICLE TYPE</p>
  
   <div class="col-sm-2" id="car1"><a href="#" style="text-decoration: none;"><img src="https://static1.squarespace.com/static/58f923d1bf629a20ab67fba2/t/5a2540ef24a6943d276a07de/1512390912595/classic+car+photoshoot" style="height: 150px; width: 100%;" alt="Convertible"><p style="color:#FFFFFF;">CONVERTIBLE</p></a></div>
 <div class="col-sm-2" id="car1"><a href="#" style="text-decoration: none;"><img src="https://i.pinimg.com/originals/81/8c/a7/818ca79d9bed351dfb8ceec89d913414.jpg" style="height: 150px; width: 100%;" alt="Coupe"><p style="color:#FFFFFF;">COUPE</p></a></div>
 <div class="col-sm-2" id="car1"><a href="#" style="text-decoration: none;"><img src="https://london.bridestory.com/images/c_fill,dpr_1.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/scoopys-highroof-kombi-wedding3-HyJlS-8SG/scoopys_vintage-ice-cream-kombi-wedding-photoshoot_1.jpeg" style="height: 150px; width: 100%;" alt="Minivan"><p style="color:#FFFFFF;">MINIVAN</p></a></div>
 <div class="col-sm-2" id="car1"><a href="#" style="text-decoration: none;"><img src="https://image.shutterstock.com/image-photo/smiling-couple-sitting-back-their-450w-1067772419.jpg" alt="Pickup" style="height: 150px; width: 100%;"><p style="color:#FFFFFF;">PICKUP</p></a></div>
 <div class="col-sm-2" id="car1"><a href="#" style="text-decoration: none;"><img src="http://report-jp.com/wp-content/uploads/2018/09/Bentley-Bentley-Car-Pics.jpg" style="height: 150px; width: 100%;" alt="Sedan"><p style="color:#FFFFFF;">SEDAN</p></a></div>
  <div class="col-sm-2" id="car1"><a href="#" style="text-decoration: none;"><img src="https://www.team-bhp.com/forum/attachments/route-travel-queries/1187207d1388939950-car-photoshoot-recommended-location-around-bangalore-_mg_0539and14moreeditedit2.jpg" style="height: 150px; width: 100%;" alt="Sport Utility"><p style="color:#FFFFFF;">SPORT UTILITY</p></a></div>
 </div>
    <div class="row" style="margin:0px;">
  <div class="col-sm-3"><p class="search">SELL YOUR CAR</p>
  <p>Thinking about selling your current vehicle?</p><p>Bring your car for an appraisal, and get a free written offer good for 7 days.</p>
  <p>Submit your vehicle information now.</p>
  <a href="#"><button style="padding:5px; border-radius:2px;" class="btn"> LEARN MORE</button></a></div>
  <div class="col-sm-3"><p class="search">NEWS</p><p>Ford F-150 truck probe by U.S. expands to 2.7 million vehicles.</p><p>Fiat has options to increase Chrysler stake to more than 70%.</p><p>Japan nuclear plant shutdown adds new risk for Toyota, auto industry.</p><p>Saab hires former Subaru exec Colbeck as North American COO.</p></div>
  <div class="col-sm-3"><p class="search">OFFICE</p><p>348 mp colony bikaner 34004</p><p>Tel: 1.AUTO.88MAX
</p><p>autotrader@gmail.com</p></div>
  <div class="col-sm-3"><p class="search">DIRECTIONS</p>
  <div id="googleMap" style="width:100%;height:250px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script></div>
  </div>
</div>

<?php }?>
</body></html>