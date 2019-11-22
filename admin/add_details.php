<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="script.js"></script>

		<!-------Including CSS File------>
        <link rel="stylesheet" type="text/css" href="style.css">
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
.form-control {
background-color:#353535;
border:none;
color:#FFFFFF;
}
#submit {
background-color:#A60000;
color:#FFFFFF;
border:none;
width: 30%;

}
#submit:hover {
background-color:#FFFFFF;
color:#000000;
}
</style>
</head>
<body style="background-color:#666666;">
<div class="header" style="background:#000000;"><b style="color:#FFFFFF; font-size:36px; text-shadow:#FFFF00 2px 2px"><i>Auto</i></b><b style="color:#CA0000; font-size:36px; text-shadow:#FFFF00 2px 2px;">Motive</b>
</div>
<div class="col-sm-2" style="height:100%; background-color:#1B1B1B;"></div>
<div class="col-sm-8" style="background-color:#1B1B1B; padding:20px; margin:10px;">
<?php
if(!isset($_COOKIE["admin"])){
	header("location:index.php?cookie=1");
}
else {
	if(isset($_GET["id"])){
	$id=$_GET["id"];
?>
<form method="post" action="submit_details.php?id=<?=$id?>" enctype="multipart/form-data">
	<p style="color:#FFFFFF; font-size:18px;" >FULL SPECIFICATIONS :-</p>
	<input type="text" name="listing" placeholder="ENTEER LISTING TITLE..." class="form-control"><br>
	<input type="text" name="engine_type" placeholder="ENTER ENGINE TYPE..." class="form-control"><br>
	<input type="text" name="cylinder" placeholder="ENTER NO. OF CYLINDER IN CAR....." class="form-control"><br>
	<input type="text" name="engine_size" placeholder="ENGINE SIZE....." class="form-control"><br>
	<input type="text" name="fuel_capacity" placeholder="FUEL CAPACITY.." class="form-control"><br>
	<input type="text" name="wheel_base" placeholder="WHEEL BASE.." class="form-control"><br>
	<input type="text" name="overall_length" placeholder="OVERALL LENGTH..." class="form-control"><br>
	<input type="text" name="width" placeholder="WIDTH" class="form-control" ><br>
	<input type="text" name="height" placeholder="HEIGHT" class="form-control"><br>
	<input type="text" name="curb_weight" placeholder="CURB WEIGHT.." class="form-control"><br>
	<input type="text" name="leg_room" placeholder="LEG ROOM...." class="form-control"><br>
	<input type="text" name="head_room" placeholder="HEAD ROOM..." class="form-control"><br>
	<input type="text" name="seating_capacity" placeholder="SEATING CAPACITY(STD).." class="form-control"><br>
	<input type="text" name="features" placeholder="ENTER CAR FEATURES SEPARATE WITH COMMA...." class="form-control"><br>
	<textarea rows="10" cols="200" name="description" placeholder="FULL DESCRIPTION IN SHORT PARAGRAPH...." class="form-control"></textarea><br>

	        <div id="maindiv">

            <div id="formdiv">
                    <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>

                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
                    <input type="submit" value="SUBMIT DETAILS" name="submit" id="upload" class="upload"/>

            </div>
        </div>

</form>

<?php
}
}
?></div>
</body></html>
