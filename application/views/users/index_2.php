<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>img/w3.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/ushare.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<meta charset="utf-8">
	<LINK REL="icon" HREF="<?php echo base_url();?>img/ushare4.png"/>
	<title>Ushare - Log In</title>

	<style type="text/css">


	body {
        
		margin: 0px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: auto;
		margin-top: 22.5%;
		margin-bottom: 22.5%;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		width: 300px;
		color: white;
	}
	

	input[type=submit] {
    width: 99%;
    background-color: #5c1526;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-bottom: 5px;
	}

	input[type=submit]:hover {
		background-color: #2d2d2d;
	}
	
	a {
		color: white; text-decoration: none;
	}
	
	a:hover{
		color: gray;
	}
	
	.error {
    color: red;
	font-size: 14px;
	}

	
	</style>
</head>
<body>

<div  class="w3-row">

	<div class="w3-third">
		<div style = "padding: 15px; background-size: cover; margin-bottom: -10px;" class = "theme" >
			<br><br><br><br><br><br>
			<center>

				<img src = "<?php echo base_url();?>img/commenting-o.png" height = "100px">  <br><br><br>
				<font color = "darkgray" size="3px">
					<font color = "white" size = "6" face = "Eraser">U share  </font> <br>Technological University of the Philippines<br>Official Website for Confessions
				</font>
				<br><br>

				<font color = "darkgray" size = "3">
					Wanna know some of the student's hidden secrets? <br><a href = "register">Sign Up Now!</a> 
				</font>

			</center>
			<br><br><br><br><br><br>
				

				<br><br><br><br><br><br><br>
			


		</div>
	</div>
	

	<div class="w3-twothird">
	

		<div id="container">
			
			 <h1>
			 	<font color = "black" face = "Century Gothic"> Login  &nbsp; </font>
			 </h1>

			<div id="body">
				<form method = "POST" action ="Login">
					<font face = "Calibri" size = "3">
						
						<div class="input-group margin-bottom-sm" style = "margin-bottom: 5px;" >
						  <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
						  <input class="form-control" type="text" name = "username" placeholder="Username">
						</div>
						<?php echo form_error('username'); ?>
						<div class="input-group">
						  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
						  <input class="form-control" type="password" name = "password" placeholder="Password">
						</div>
						<?php echo form_error('password'); ?>
						<font color = "red"> *Incorrect Username or Password</font>
						<input style = "margin-bottom: 15px;" type = "Submit" value = "Sign in"/>
					</font>
				</form>

			</div>
			
		</div>
		

		
	</div>
</div>
</body>
</html>