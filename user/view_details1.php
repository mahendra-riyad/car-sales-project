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

<link rel="stylesheet" type="text/css" href="view_details.css">
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
      
  /*  $.post("inbox.php",{data:data1},function(data){
        if(data=='fail'){
          alert("this is your car !");
        }
        else{
        //  alert("Message Send Check Your Inbox");
        alert(data);
        }
      }); */
      $.ajax({
            type: "POST",
            url: "inbox.php",
            data: data1
        }).done(function(data){
            alert(data);
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
        /*$.ajax({
            type: "POST",
            url: "selectedstate.php",
            data: { state : selectedstate } 
        }).done(function(data){
            $("#response").html(data);
        });*/
    });
});

</script>
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
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <script type="text/javascript">
    function change(v) {
      // body...
      document.getElementById('myImg').src=document.getElementById(v).src;
    }
  </script>
</head>
<body style="background-color:#202020;">
  <?php
  if(isset($_COOKIE["user"]))
  {
    $user_code=$_COOKIE["user"];
  ?>
<div class="container-fluid">
<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
  <a href="logout.php" style="float:right;"><button id="login" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a>
  <?php
  include("db.php");
  $rs=mysqli_query($con,"select * from user_login where user_code='$user_code'");
  if($r=mysqli_fetch_array($rs)){
  ?>
  <i style="float:right; border:none;" id="login"><?=$r[2]?></i>
  <?php
  }
  ?>
</div>

<div id="id01" class="modal">
   <form class="modal-content animate" action="/action_page.php">
   <div class="container2">
     <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>    </div>

   <b id="logo" style="font-size:50px; margin-left:28%;">Login Pannel</b>
  <div class="input-container" style="margin-top:60px;">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
  <button type="submit" class="btn2"><b>Login</b></button>
</form>
</div>

<div class="topnav">
  <a href="profile.php" >HOME</a>
  <a href="inventory.php" class="show">INVENTORY</a>
  <a href="sell_your_car.php">SELL YOUR CAR</a>
  <a href="#">FINCANING</a>
  <a href="blog.php">BLOG</a>
  <a href="#">CONTACT US</a>
  <a href="my_car.php">MY CAR</a>
</div>
<div class="row">
<div class="column left">
<p class="search">SEARCH</p>
<form>
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
<div >
<a href='view_details.php?id=E_7X_7c_7t_70_7' style="border-bottom:none;"><img src="image/a2.PNG" class="img-responsive"></a>
    
<p style="margin-top:-30px; color:#FFFFFF;" class="weekofthedeal" > 2013 Audi A5  <b style="color:#FFCC33;">  $42,300</b></p>
</div>  
</div>
<div class="column middle">
<?php
 include("db.php");
 $car_code =$_GET["id"];
 ?>

<img src="uploads/<?=$car_code ?>0.jpg"  id="myImg" width="100%" maxwidth="200px;" height="400px" alt="snow">
 <marquee onMouseOver="this.stop()" onMouseOut="this.start()" style="border:#CCCCCC;">
 <?php
 for($i=0;$i<=4;$i++){
 	?><button style="padding:0px;"><img src="uploads/<?=$car_code ?><?=$i?>.jpg" width="150px" height="100px" id="<?=$i?>" onClick="change('<?=$i?>')"></button>
<?php
 }
 ?>
 </marquee>
 
 <div class="tab">
  <button class="tablinks" onClick="openCity(event, 'OVERVIEW')" id="defaultOpen">OVERVIEW</button>
  <button class="tablinks" onClick="openCity(event, 'FEATURES')">FEATURES</button>
  <button class="tablinks" onClick="openCity(event, 'VIDEO')">VIDEO</button>
  <button class="tablinks" onClick="openCity(event, 'CONTACT')">CONTACT US</button>
</div>

<div id="OVERVIEW" class="tabcontent">
<?php 
 $rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");
 while($r=mysqli_fetch_array($rs)){
 ?>
  <h1 style="color:#FFFF77; text-transform:uppercase;"><?=$r[2]?> <?=$r[3]?> <?=$r[4]?></h1>
  
  <?php
  $stock=$r[14];
  $year=$r[2];
  $car_name=$r[3];
  $car_model=$r[4];
  }
  $aa=mysqli_query($con,"select * from add_details where car_code='$car_code'");
  while($a=mysqli_fetch_array($aa)){
  ?> 	
  		<h3 style="color:#FFFFB9; text-transform:capitalize;"><?=$a[1]?> !</h3><br>
		<img src="uploads/<?=$car_code?>1.jpg" width="100%" height="350">
		<p style="font-size:16px; word-spacing:2px; margin-top:20px; text-indent:60px;"><?=$a[15]?></p>
  <?php
  }
  ?>
</div>

<div id="FEATURES" class="tabcontent">
  
</div>

<div id="VIDEO" class="tabcontent">
  <iframe width="100%" height="315" src="https://www.youtube.com/embed/upUpVb3cLfk?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div id="CONTACT" class="tabcontent">
<?php
    $pp=mysqli_query($con,"select * from user_login where user_code='$user_code'");
    if($p=mysqli_fetch_array($pp)){
   ?>

  <div class="input-container">
    <input type="text" id="u_code" style="display: none;" value="<?=$user_code?>" >
    <input type="text" id="car_code" style="display: none;" value="<?=$car_code?>" >
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="NAME(REQUIRED)" id="name" name="name" value="<?=$p['user_name']?>">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="EMAIL(REQUIRED)" name="email" id="email_id" value="<?=$p['email_id']?>">
  </div>
  
  <div class="input-container">
    <i class="glyphicon glyphicon-earphone icon"></i>
    <input class="input-field" type="text" placeholder="PHONE NUMBER" id="phone" name="phone">
  </div>
  
  	<textarea cols="60" rows="6" name="comment" id="comment" style="border-radius:4px; background-color:#202020; color:#FFFFFF; border:none;">
	I would like to request more information about your <?=$year?> <?=$car_model?> <?=$car_name?> with Stock Number #<?=$stock?>
	</textarea><br>

  <button class="form_submit" id="form_submit">Submit</button>

<?php }?> 

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
 
 
</div>
<div class="column right">
<?php 
 $rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");
 while($r=mysqli_fetch_array($rs)){
 ?>
 	<p id="dollar"><b>$ <?=$r[5]?></b></p>
	<button id="login"><b><span class="glyphicon glyphicon-envelope"></span> REQUEST INFORMATION</b></button>
 <?php
 }
 ?>
       <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i>Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i>Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i>Google+
        </a>
      </div>
	  
	  <div class="information">
	  <div class="info" style="margin:15px; padding-top:15px;">
	  <?php 
 $rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");
 while($r=mysqli_fetch_array($rs)){
 ?>
 <p id="information"><b><?=$r[9]?> , <?=$r[8]?></b></p>
 <p id="information"><b>Price:</b> <?=$r[5]?></p>
 <p id="information"><b>Drive:</b> <?=$r[10]?></p>
 <p id="information"><b>Stock:</b> <?=$r[14]?></p>
 <p id="information"><b>Transmission:</b> <?=$r[11]?></p>
 <p id="information"><b>Exterior:</b> <?=$r[12]?></p>
 <p id="information"><b>Interior:</b> <?=$r[13]?></p>
 <p id="information" style="border:none;"><b>VIN:</b> <?=$r[15]?></p>
 
 <?php
 $drive=$r[10];
 $transmission=$r[11];
 }
 ?>
	 </div> </div>
	 
	 <button class="accordion" id="defaultOpenid">FULL SPECIFICATIONS</button>
<div class="panel">
<p style="margin-top:10px;"><b>Drive:</b> <?=$drive?></p>
	  <?php 
 $aa=mysqli_query($con,"select * from add_details where car_code='$car_code'");
 while($a=mysqli_fetch_array($aa)){
 ?>
  <p><b>Engine Type:</b> <?=$a[2]?></p>
  <p><b>Cylinder:</b> <?=$a[3]?></p>
  <p><b>Engine Size:</b> <?=$a[4]?> L</p>
  <p><b>Fuel Capacity:</b> <?=$a[5]?></p>
  <p><b>Wheelbase:</b> <?=$a[6]?></p>
  <p><b>Overall Length:</b> <?=$a[7]?></p>
  <p><b>Width:</b> <?=$a[8]?></p>
  <p><b>Height:</b> <?=$a[9]?></p>
  <p><b>Curb Weight:</b> <?=$a[10]?></p>
  <p><b>Leg Room:</b> <?=$a[11]?></p>
  <p><b>Head Room:</b> <?=$a[12]?></p>
  <p><b>Seating Capacity(std):</b> <?=$a[13]?></p>
  
  <?php
  }
  ?>
  <p><b>Drive:</b> <?=$drive?></p>
  <p><b>Transmission:</b> <?=$transmission?></p>
</div>

<button class="accordion" style="margin-top:-25px; ">WARRANTY</button>
<div class="panel">
  <p style="margin-top:10px;">5-Day Money-Back Guarantee At Car Dealer, we know that not every car is perfect for every person, so all used Car Dealer cars come with our 5-Day Money-Back Guarantee. You can return any car for any reason within a 5-day period. Simply bring it back in the condition in which it was purchased, and you will get a full refund.</p>
</div>

<button class="accordion" style="margin-top:-25px; ">FINANCING</button>
<div class="panel">
	<p style="margin-top:10px;"></p>
	<i>Affordable solutions</i>
  <p>Car Dealer offers some of the most competitive terms in the industry with solutions for a wide range of credit profiles.</p>
  <i>Speed</i>
  <p>Fill out our quick credit application and get decisions in a matter of minutes.</p>
  <i>Trust</i>
  <p>We only use respected and reputable finance sources, and we always protect our customers information.</p>
  <i>Integrity</i>
  <p>Straightforward, honest business practices are the standard at Car Dealer, and our financing is no exception. If you find a more competitive offer elsewhere, you have three business days to change your mind.</p>
</div>
<button class="accordion" style="margin-top:-25px; ">TRADE-IN</button>
<div class="panel" style="border:none">
  <p style="margin-top:10px;">Sell your current car and buy a new one at the same place! You can even apply your written offer towards the purchase of a new car.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
document.getElementById("defaultOpenid").click();
</script>

</div>
</div>

<!-- footer -->


<div class="footer" style="margin-top:10px;">
<p class="search"> FETURED VEHICLE</p>

<div class="row1" style="margin-top:-10px;">
<?php 
include("db.php");
$rs=mysqli_query($con,"select * from car_short_details");
$countnumber=0;

while($r=mysqli_fetch_array($rs)){
	$countnumber++;
	if($countnumber <=4){
?>
<div class="col-sm-3" style="padding:0px; background-color:#151515;">

<div class="pannel" style="margin:15px; border:#000000 solid 1px;" >
<ul class="tag"><li>
  <?=$r[7]?>
 </li></ul>
<a href="view_details1.php?id=<?=$r[1]?>"><img src="uploads/<?=$r[1]?>0.JPG" class="img img-responsive" style="height:170px; width:100%; margin-top:-25px;"></a>

<div class="pannel1" style="padding:10px;">	

	<p style="color:#FFFFFF; font-size:20px; margin-top:30px; text-transform:capitalize;"><b><?=$r[2]?> <?=$r[3]?> <?=$r[4]?></b></p>
	<p><b style="color:#FFCC33; font-size:18px;">$<?=$r[5]?></b></p><p style="color:#FFFFFF; font-size:18px;"> <?=$r[6]?> Miles</p>
	<p style="color:#CCCCCC; font-size:18px;"><?=$r[9]?>, <?=$r[8]?></p>
	<p><a href="view_details.php?id=<?=$r[1]?>"><button class="button" style="vertical-align:middle"><span>Details</span></button></a></p>
</div></div></div>
<?php
}
}
?>
</div></div></div>
<div class="container-fluid">
  <p class="search">FIND BY VEHICLE TYPE</p>
   <a href="#"><div class="col-sm-2" style="background-color:#151515; margin-bottom:20px; margin-top:15px; padding:20px;"><a href="#"><img src="http://cdn-gorillathemes.netdna-ssl.com/demo/automotive/wp-content/themes/automotive-deluxe/assets/images/product-images/convertible.png" alt="Convertible"><p style="color:#FFFFFF;">CONVERTIBLE</p></a></div>
  <div class="col-sm-2" style="background-color:#151515; margin-bottom:20px; margin-top:15px; padding:20px;"><a href="#"><img src="http://cdn-gorillathemes.netdna-ssl.com/demo/automotive/wp-content/themes/automotive-deluxe/assets/images/product-images/sportscars.png" alt="Coupe"><p style="color:#FFFFFF;">COUPE</p></a></div>
  <div class="col-sm-2" style="background-color:#151515; margin-bottom:20px; margin-top:15px; padding:20px;"><a href="#"><img src="http://cdn-gorillathemes.netdna-ssl.com/demo/automotive/wp-content/themes/automotive-deluxe/assets/images/product-images/minivans.png" alt="Minivan"><p style="color:#FFFFFF;">MINIVAN</p></a></div>
  <div class="col-sm-2" style="background-color:#151515; margin-bottom:20px; margin-top:15px; padding:20px;"><a href="#"><img src="http://cdn-gorillathemes.netdna-ssl.com/demo/automotive/wp-content/themes/automotive-deluxe/assets/images/product-images/pickuptrucks.png" alt="Pickup"><p style="color:#FFFFFF;">PICKUP</p></a></div>
  <div class="col-sm-2" style="background-color:#151515; margin-bottom:20px; margin-top:15px; padding:20px;"><a href="#"><img src="http://cdn-gorillathemes.netdna-ssl.com/demo/automotive/wp-content/themes/automotive-deluxe/assets/images/product-images/sedanscoupes.png" alt="Sedan"><p style="color:#FFFFFF;">SEDAN</p></a></div>
  <div class="col-sm-2" style="background-color:#151515; margin-bottom:20px; margin-top:15px; padding:20px;"><a href="#"><img src="http://cdn-gorillathemes.netdna-ssl.com/demo/automotive/wp-content/themes/automotive-deluxe/assets/images/product-images/crossover.png" alt="Sport Utility"><p style="color:#FFFFFF;">SPORT UTILITY</p></a></div>
 </div>

  <div class="col-sm">
  <div class="col-sm-3"><p class="search">SELL YOUR CAR</p>
  <p>Thinking about selling your current vehicle?</p><p>Bring your car for an appraisal, and get a free written offer good for 7 days.</p>
  <p>Submit your vehicle information now.</p>
  <a href="#"><button style="padding:5px; border-radius:2px;"> LEARN MORE</button></a></div>
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
</body>
<?php }?>