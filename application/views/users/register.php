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
	<title>Sign Up for Ushare</title>

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
		margin-top: 10%;
		margin-bottom: 22.5%;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		width: 500px;
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
	.capitalize {
    text-transform: capitalize;
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
					Wanna know some of the student's hidden secrets? <br><a href = "index">Sign In Now!</a> 
				</font>

			</center>
			<br><br><br><br><br><br>
				

				<br><br><br><br><br><br><br>
			


		</div>
	</div>
	

	<div class="w3-twothird">
	

		<div id="container"  style="margin-bottom: 0px">
			
			 <h1>
			 	<font color = "black" face = "Century Gothic"> Register  &nbsp; </font>
			 </h1>

			<div id="body">

			<div  class="w3-row">
				<div class="w3-col" style="width:48%">
				<form method = "POST" action ="Register2">
					<font face = "Calibri" color = "black" size = "3">
						Account:
						<div class="input-group margin-bottom-sm" style = "margin-bottom: 5px;" >
						  <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
						  <input class="form-control" type="text" name = "username" placeholder="Username">
						</div>
						  <?php echo form_error('username'); ?> 
						
						
						<div class="input-group margin-bottom-sm" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
						  <input class="form-control" type="password" name = "password" placeholder="Password">
						</div>
						  <?php echo form_error('password'); ?> 
						

						<div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
						  <input class="form-control" type="password" name = "cpassword" placeholder="Retype Password"> 
						</div>
						  <?php echo form_error('cpassword'); ?>

						<div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
						  <input class="form-control capitalize" type="text" name = "hidden_name" placeholder="Hidden Name">
						</div>
						  <?php echo form_error('hidden_name'); ?>
						

						 Student Info
						  <div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-id-card-o fa-fw"></i></span>
						  <input class="form-control capitalize" type="text" name = "student_no" placeholder="Student No">
						</div>
						  <?php echo form_error('student_no'); ?>

						  <div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
						  <input class="form-control capitalize" type="text" name = "course" placeholder="Course">
						</div>
						  <?php echo form_error('course'); ?>

						  <div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-tags fa-fw"></i></span>
						  <select class="form-control" name = "college" placeholder="College">
						  <option disabled selected>College</option>
       					  <option value = "College of Science">College of Science</option>
       					  <option value = "College of Engineering">College of Engineering</option>
       					  <option value = "College of Industrial Technology">College of Industrial Technology</option>
       					  <option value = "College of Industrial Education">College of Industrial Education</option>
       					  <option value = "College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
       					  <option value = "College of Liberal Arts">College of Liberal Arts</option>
                          </select>
						</div>
						  <?php echo form_error('college'); ?>

			</div>
			<div class="w3-col" style="width:4%">
			&nbsp;
			</div>
			<div class="w3-col" style="width:48%">
						Personal Info

						<div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-address-book-o fa-fw"></i></span>
						  <input class="form-control capitalize" type="text" name = "firstname" placeholder="First Name">
						  <input class="form-control capitalize" type="text" name = "lastname" placeholder="Last Name">
						  <input class="form-control capitalize" type="text" name = "middlename" placeholder="Middle Name">
						</div>
						  <?php echo form_error('firstname'); ?>
						  <?php echo form_error('lastname'); ?>
						  <?php echo form_error('middlename'); ?>
						
						<div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
						  <input class="form-control capitalize" type="text" name = "email" placeholder="Email">
						</div>
						  <?php echo form_error('email'); ?>

						  <div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
						  <input class="form-control" type="text" name = "contact_no" placeholder="Contact No">
						</div>
						  <?php echo form_error('contact_no'); ?>

						  <div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-birthday-cake fa-fw"></i></span>
						  <input class="form-control" type="text" name = "birthdate" placeholder="Birthdate e.g. yyyy/mm/dd">
						</div>
						  <?php echo form_error('birthdate'); ?>

						  

						  <div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-venus-mars fa-fw"></i></span>
						  <select class="form-control" name = "sex" placeholder="Sex">
						  <option disabled selected>Sex</option>
       					  <option value = "Male">Male</option>
                          <option value = "Female">Female</option>
                          </select>
						</div>
						  <?php echo form_error('sex'); ?>
						  
			</div>
			<div class="w3-col" style="width:100%">
			Forgot Password Question
			<div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
						  <select class="form-control" name = "forgot_question" placeholder="Question">
						  <option disabled selected>Questions</option>
       					  <option value = "Hometown">Hometown</option>
                          <option value = "Favorite Color">Favorite Color</option>
						  <option value = "Favorite Superhero">Favorite Superhero</option>
						  <option value = "Favorite Food">Favorite Food</option>
                          </select>
						</div>
						<?php echo form_error('forgot_question'); ?>
						
						<div class="input-group" style = "margin-bottom: 5px;">
						  <span class="input-group-addon"><i class="fa fa-reply fa-fw"></i></span>
						  <input class="form-control capitalize" type="text" name = "forgot_password" placeholder="Answer">
						</div>
						  <?php echo form_error('forgot_password'); ?>
			</div>
			</div>
			<input style = "margin-bottom: 15px;" type = "Submit" value = "Sign up"/>
					</font>
				</form>
				<?php echo $this->session->flashdata('msg'); ?> <br>

			</div>
			
		</div>
		

		
	</div>
</div>
</body>
</html>