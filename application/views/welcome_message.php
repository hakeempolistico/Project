<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>img/w3.css">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		body {
			background-color: #222222;
		}
		.container {
			width: 101.2%;
			background-color: #323232;
			
		}
		.container2 {
			width: 101.2%;
			background-color: #4b4b4b;
		}
		.container3 {
			width: 70%;
			border: 1px solid darkgray;
			box-shadow: 0 0 8px #D0D0D0;

		}
		.user{
			padding: 1.2%;
		}
		.user2{
			padding: .7%;
			margin: auto;
		}
		.fixed{
			position: fixed; 
			width: 100%;
		}
		.mt{
			margin-top: 20%;
		}
	</style>
	
</head>
<body> 
			<nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="mySidenav">
			<a href="javascript:void(0)"
			onclick="w3_close()"
			class="w3-closenav w3-large">Close &times;</a>
			<a href="tryit_426.htm#">Link 1</a>
			<a href="tryit_426.htm#">Link 2</a>
			<a href="tryit_426.htm#">Link 3</a>
			<a href="tryit_426.htm#">Link 4</a>
			<a href="tryit_426.htm#">Link 5</a>
			</nav>
			
	<div class = "fixed">
	<div class = "container w3-row" >
		<div class = "user">
			<span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
			<form >
				<img style = "float: left; margin-left: 2%; margin-top: -8px;" src="<?php echo base_url();?>img/1.png" alt="Smiley face" height="50" width="40">
				<input style = "width: 35%; margin-left: 27%; back" type = "text" name = "search" placeholder = "search" />
				<img style = "float: right; margin-right: 3%; margin-top: -6px;" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="40" width="40">
			</form>
		</div>
	</div>
	
	<div class = "container2 w3-row" >
		<div class = "user2">
			<form >
				<center>
					<font style = "margin-right: 2%;" face = "Calibri" size = "4" color = "white"> Profile </font>
					<font style = "margin-right: 2%;" face = "Calibri" size = "4" color = "white"> Timeline </font>
					<font style = "margin-right: 2%;" face = "Calibri" size = "4" color = "white"> Friends </font>
					<font style = "margin-right: 2%;" face = "Calibri" size = "4" color = "white"> Videos </font>
					<font style = "margin-right: 2%;" face = "Calibri" size = "4" color = "white"> Pictures </font>
				</center>
			</form>
		</div>
	</div>	
	
	</div>
	

	<div class = "w3-row">
		<div class="w3-col" style="width:25%; padding: 3%; margin-top: 8%;">
			<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> News Feed </font> <br />
			<font style = "margin-bottom: 2%;" face = "Calibri" size = "4" color = "white"> Messages </font> <br>
			<font style = "margin-bottom: 2%;" face = "Calibri" size = "4" color = "white"> Groups </font> <br><br> <hr> <br>
			<font style = "margin-bottom: 2%;" face = "Calibri" size = "4" color = "white"> Settings </font> <br>
			<font style = "margin-bottom: 2%;" face = "Calibri" size = "4" color = "white"> Logout </font>
		</div>
		
		<div class="w3-col" style="width:75%; padding: 3%; margin-top: 8%;"">
			<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
			<div class = "container3">
				<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><br><br><br><hr>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Likes </font>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comments </font>
			</div><br>
			
			<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
			<div class = "container3">
				<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><br><br><br><hr>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Likes </font>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comments </font>
			</div><br>
			
			<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
			<div class = "container3">
				<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><br><br><br><hr>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Likes </font>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comments </font>
			</div><br>
			
			<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
			<div class = "container3">
				<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><br><br><br><hr>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Likes </font>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comments </font>
			</div><br>
			
			<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Hakeem Polistico	 </font> <br />
			<div class = "container3">
				<font style = "margin: auto;" face = "Calibri" size = "4" color = "white"> Pictures or posts anything else	 </font> <br><br><br><br><hr>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Likes </font>
				<font style = "margin: 0 3% 0 3%" face = "Calibri" size = "3" color = "white"> Comments </font>
			</div><br>
		</div>
	
	
	</div>

	
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</body>
</html>