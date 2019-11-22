<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="script.js"></script>
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
<script>
		/*$("button").click(function(){*/
		$(document).on("click",".btn.btn-danger",function(){
			var v=$(this).attr("id");
			$.post("delete_car.php",{delete:v},function(data){
				$("#r"+v).fadeOut(1000);
			});
		});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on("click",".btn.btn-default",function(){
      var v=$(this).attr("id");
      $.post("edit_car.php",{car_code:v},function(data){
                
        $("#msg").append(data); 

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

</style>
<style>
* {
  box-sizing: border-box;
}

.middle {
	  background-color: #151515;
  margin-left: 20%;
  font-family: Raleway;
  padding: 40px;
  margin-top:110px;
  min-width: 300px;
  height:100%;
  
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
select {
  padding: 10px;
  width: 50%;
  font-size: 17px;
  font-family: Raleway;
  color:#FFFFFF;
  background-color:#202020;
  border:none;
  margin-bottom:10px;
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

#prevBtn {
  background-color:#333333;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

/* Style the tab */
.tab {
    overflow: hidden;
    background-color: #151515;
	margin-top:30px;
	position:fixed;
	margin:20px;
 	 margin-top:-40px;

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
	opacity:.7;
	color:#FFFFFF;
	border-right:#FFFFFF solid 1px;
	overflow:hidden;
	
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

 Style the tab content 
.tabcontent {
    display: none;
}
</style>
</head>
<body style="background-color: #202020;">
<div class="container-fluid">
<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
  <a href="logout.php" style="float:right;"><button id="login" style="width:auto;"><span class="glyphicon glyphicon-log-out"></span> Log-out</button></a>
</div>
<ul>
  <li><a  href="main_page.php" style="text-decoration:none;">Home</a></li>
  <li><a href="#" style="text-decoration:none;">USER</a></li>
  <li><a class="active" href="add_new_car.php" style="text-decoration:none;">ADD NEW CAR</a></li>
  <li><a href="#about" style="text-decoration:none;">About</a></li>
</ul>
<div class="middle">
<?php 
$admin_code="x_";
?>

<div class="tab">
  <button class="tablinks" onClick="openCity(event, 'add')" id="defaultOpen">ADD NEW CAR</button>
  <button class="tablinks" onClick="openCity(event, 'edit')">EDIT CAR DETAILS</button>
  <button class="tablinks" onClick="openCity(event, 'VIDEO')">VIDEO</button>
  <button class="tablinks" onClick="openCity(event, 'CONTACT')">CONTACT US</button>
</div>
<div id="add" class="tabcontent">
<form id="regForm" action="submit_details.php?admin=<?=$admin_code?>" method="post" enctype="multipart/form-data">
  <!-- One "tab" for each step in the form: -->
  <p style="color:#FFFFFF; font-size:18px;" >Vehicle information :-</p>
   <select name="year">
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
  <select name="car_name" class="make">
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
  <select name="car_modal" id="modal"></select><br>
  <input type="text" name="dollar" placeholder="Car rate in dollar..."><br>
  <input type="text" name="miles" placeholder="Car running miles..." ><br>
  <select name="modal">
    <option value="new">New</option>
    <option value="old">Old</option>
  </select><br>
  <input type="text" name="state" placeholder="state name..."><br>
  <input type="text" name="city" placeholder="city name..."><br>
  <select name="drive">
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
  <select name="transmission">
    <option>select transmission</option>
    <option value="automatic">Automatic</option>
    <option value="manual">Manual</option>
    <option value="semi-auto">Semi-Auto</option>
    <option value="other">Other</option>
  </select><br>
  <input type="text" name="exterior" placeholder="Exterior color...."><br>
  <input type="text" name="inerior" placeholder="Inerior color...."><br>
  <input type="text" name="stock" placeholder="ENTER CAR STOCK..."><br>
  <input type="text" name="vin" placeholder="Enter VIN number..."><br>

<p style="color:#FFFFFF; font-size:18px;" >FULL SPECIFICATIONS :-</p>
	<input type="text" name="listing" placeholder="ENTEER LISTING TITLE..."><br>
	<input type="text" name="engine_type" placeholder="ENTER ENGINE TYPE..."><br>
	<input type="text" name="cylinder" placeholder="ENTER NO. OF CYLINDER IN CAR....."><br>
	<input type="text" name="engine_size" placeholder="ENGINE SIZE....."><br>
	<input type="text" name="fuel_capacity" placeholder="FUEL CAPACITY.."><br>
	<input type="text" name="wheel_base" placeholder="WHEEL BASE.."><br>
	<input type="text" name="overall_length" placeholder="OVERALL LENGTH..."><br>
	<input type="text" name="width" placeholder="WIDTH" ><br>
	<input type="text" name="height" placeholder="HEIGHT"><br>
	<input type="text" name="curb_weight" placeholder="CURB WEIGHT.."><br>
	<input type="text" name="leg_room" placeholder="LEG ROOM...."><br>
	<input type="text" name="head_room" placeholder="HEAD ROOM..."><br>
	<input type="text" name="seating_capacity" placeholder="SEATING CAPACITY(STD).."><br>
	<input type="text" name="features" placeholder="ENTER CAR FEATURES SEPARATE WITH COMMA...."><br>
	<textarea rows="10" cols="140" name="description" placeholder="FULL DESCRIPTION IN SHORT PARAGRAPH...."></textarea><br>

	                <p style="color:#FFFFFF; font-size:18px;" >IMAGES :-</p>
                    <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>

                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
                    <input type="submit" value="SUBMIT DETAILS" name="submit" id="upload" class="upload"/>
</form>
</div>
<div id="edit" class="tabcontent">
<div class="column" id="regForm">
<p style="color:#FFFFFF; font-size:18px;" >ALL CAR :-</p>
	<table class="table table-responsive">
<?php 
	include("db.php");
	$rs=mysqli_query($con,"select * from car_short_details");
	while($a=mysqli_fetch_array($rs)){
?>		
<tr id="r<?=$a[1] ?>" style="border-bottom:#CCCCCC groove .5px; border:none; color:#FFFFFF;"><td><?=$a[2]?></td><td><b><?=$a[3]?> - <?=$a[4]?></b></td><td><?=$a[9]?> , <?=$a[8]?></td><td><?=$a[14]?></td><td style="text-align:center;"><button id="<?=$a[1] ?>" class="btn btn-danger">delete</button></td><td style="text-align:center;"><button id="<?=$a[1] ?>" class="btn btn-default">edit</button></td></tr>
<?php } ?>
</table>
<form  id="msg"></form>
</div>
<div id="VIDEO" class="tabcontent">maaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
</body>
</html>
