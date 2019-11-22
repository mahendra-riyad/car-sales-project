<!DOCTYPE html>
<html>
<head>
	<title>car sales management </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

.header {
    background-color:#000000;
 padding: 20px;
    text-align: left;
	box-shadow:.5px .5px .5px .5px #B70000;
	font-family:Geneva;
	margin-top:5px;
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

ul#stack {
	position:fixed;
	top:0px;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow:hidden;
background-color:#3A3A3A;
margin-top:70px;
}

li#stack {
    float: left;
}

li#stack a {
    display: block;
    color:#000000;
    text-align: center;
    padding: 24px 16px;
    text-decoration:none;
}

li#stack a:hover {
    background-color:#3366FF;
}
</style>

<style type="text/css">
	input[type=text] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	
}
	input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	background-color:#202020;
	color:#FFFFFF;
	border:none;
	
}
	input[type=password] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	background-color:#202020;
	color:#FFFFFF;
	border:none;
}
input[type=submit] {
    background-color:#000000;
    color: white;
    padding: 20px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:100%;
	margin-top:20px;
	font-style:bold;
}
.button:hover {
background-color:#b70000;
transition:1s;
}
label {
color:#CCCCCC;
padding: 12px;
font-size:30px;
font-family:Georgia, "Times New Roman", Times, serif;
}
.container {
	margin-top:200px;
    border-radius: 5px;
background-color:#101010;
    padding: 20px;
	width:50%;
	content-position:center;
}
</style>
</head>
<body style="background-color:#202020;">
<div class="container-fluid" style="border:#B70000 solid 1px;">
<div class="header">
  <i><b style="color:#FFFFFF;" id="logo"> Auto</b><b style="color:#CC0033" id="logo">Trader</b></i>
</div>
<div class="container">
<form method="post" action="check.php">
	<label>Email Id :</label><input type="email" name="email_id" placeholder="Enter Admin email id......">
	<label>Password :</label><input type="password" name="password" placeholder="Enter password........">
							<input type="submit" value="Admin Login" class="button">
</form></div>
</div>
</body>
</html>