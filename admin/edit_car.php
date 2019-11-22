<?php 
	if($_REQUEST["car_code"]){
		$car_code=$_REQUEST["car_code"];

		include("db.php");
		$rs=mysqli_query($con,"select * from car_short_details where car_code='$car_code'");
		while($r=mysqli_fetch_array($rs)){
		?>
		 <select name="year">
	<option value="<?=$r[2]?>" selected><?=$r[2]?></option>
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
    <option value="<?=$r[3]?>" selected><?=$r[3]?></option>
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
  <select name="car_modal" id="modal">
  	<option value="<?=$r[4]?>" selected></option>
  </select><br>
  <input type="text" name="dollar" placeholder="Car rate in dollar..." value="<?=$r[5]?>"><br>
  <input type="text" name="miles" placeholder="Car running miles..."  value="<?=$r[6]?>"><br>
  <select name="modal">
  	<option value="<?=$r[7]?>"><?=$r[7]?></option>
    <option value="new">New</option>
    <option value="old">Old</option>
  </select><br>
  <input type="text" name="state" placeholder="state name..." value="<?=$r[8]?>"><br>
  <input type="text" name="city" placeholder="city name..." value="<?=$r[9]?>"><br>
  <select name="drive">
    <option value="<?=$r[10]?>" selected><?=$r[10]?></option>
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
		<?php

		}

	}
?>