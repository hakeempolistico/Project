<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>img/w3.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>



	
<body style = "background-color: #fbf3f2;">

<nav class="w3-sidenav  theme2 w3-card-2" style="display:none;" id="mySidenav">
  	<a href="javascript:void(0)"
  	onclick="w3_close()"
  	class="w3-closenav w3-large " style = "padding: 3%"  > 
  		<font style = "text-align: right" color = "white">  
  			&times; 
  		</font>
 	</a>
  	
  	
  	<hr class = "sideNavHr">

	<a style = "padding: 4%;" href="feed">
		<font color = "white" size = "3" style = "margin-left: 25%;">
			<img style = "margin-right: 6%;" src="<?php echo base_url();?>img/home_2.png" alt="Smiley face" height="20" width="20">Feed
		</font>
	</a>
	
	<a style = "padding: 4%" href="people">
		<font color = "white" size = "3" style = "margin-left: 25%;" >
			<img style = "margin-right: 6%" src="<?php echo base_url();?>img/people_2.png" alt="Smiley face" height="20" width="20">People
		</font>
	</a>
	
	<a style = "padding: 4%" href="tryit_426.htm#">
		<font color = "white" size = "3" style = "margin-left: 25%;" >
			<img style = "margin-right: 6%" src="<?php echo base_url();?>img/about_2.png" alt="Smiley face" height="20" width="20">About
		</font>
	</a>
	
	<a style = "padding: 4%" href="logout">
		<font color = "white" size = "3" style = "margin-left: 25%;" >
			<img style = "margin-right: 6%" src="<?php echo base_url();?>img/logout_4.png" alt="Smiley face" height="20" width="20">Logout
		</font>
	</a>
	<hr class = "sideNavHr">


	<div style = "padding-left: 5%; padding-right: 5%;">

		<center>
			<font color = "darkgray" size = "2">
				USHARE Confession Site
			</font>
		</center>

		<center>
			<font color = "darkgray" size = "2" >
				©Copyright 2017
			</font>
		</center>
		

		<font color = "gray" size = "2" >
			 
		</font>
	</div>


</nav>


<?php foreach($details as $detail){?>
<div id="header">
	<header>
	<ul class="w3-navbar theme w3-padding-16" >
  <li>	
  		<table style = "margin-bottom: -10px" >	
				<tr>
					<td style = "padding-left: 10px; padding-right: 10px">
						<span class="w3-opennav w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</span>
					</td>
					<td>
						<font face = "Eraser" size = "5" color = "white"> Ushare |</font>

					</td>
					<td style = "padding-left: 10px" >
						<font face = "Century Gothic" size = "5" color = "white"> Home</font>
					</td>
				</tr>	
				
		</table>
  </li>
  <li id = "user" class = "w3-right">
  			<table style="margin-top: -10px; margin-bottom: -10px">
				<tr style="padding: -3px;">
					<td>
						<a class = "pointer w3-hover-none" onclick="document.getElementById('id02').style.display='block'">
							<font face = "Century Gothic" size = "5" color = "white">  <?php echo $detail->display_name;?> </font>
						</a>
					</td>
					<td>
						<a style="margin-left: -30px;" class = "pointer w3-hover-none" onclick="document.getElementById('id02').style.display='block'">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-user-o fa-stack-1x fa-inverse"></i>
								</span>
						</a>
					</td>
				</tr>	
				
			</table>
  </li>
  <li class = "w3-right"></li>
</ul>
<?php }?> 

</header>
	
		
	
		
		
		
	
</div>



<div id="main">
<br><br>

	<div class="w3-row">
	  <div class="w3-green w3-container w3-col" style="width:25%">
		 
	  </div>
	  
	  <div class="w3-container w3-col" style="width:50%">	

		<?php foreach($posts as $post){?>
		
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font face = "Calibri" size = "4" color = "black"> &nbsp; <?php echo $post->hidden_name;?> | </font> <font face = "Calibri" size = "4" color = "darkgray"> <?php echo $post->college;?>	 </font>
		<div style = "margin-top: -1.5%" class="w3-container w3-section w3-pale-red w3-round w3-border">
			<p>
				<font face = "Calibri" size = "4" color = "darkred"> 
					<b><?php echo $post->confession_title;?></b>
				</font>
			</p>		
			
		<p class = "marginTop" ><pre><font face = "Calibri" size = "4" ><?php echo $post->confession_text;?></font></pre><hr class = "hr">
			</p> 
			
			
			
			<div> 
				<a href = "#"> <i style = "margin-top: -2px; margin-right: 10px;" class="fa fa-thumbs-o-up fa-lg left" aria-hidden="true"></i> </a>
				<a href = "#"> <i style = "margin-top: -2px; margin-right: 10px;" class="fa fa-thumbs-o-down fa-lg left" aria-hidden="true"></i>  </a>
				<a href = "#" onclick="document.getElementById('id04').style.display='block'"> <i style = "margin-top: -2px; margin-right: 15px;" class="fa fa-comments-o fa-lg left" aria-hidden="true"></i>  </a>
				
				<font class = "postMargin right" size = "2" ><?php echo $post->time;?> / <?php echo $post->date;?> </font>
			</div>
		</div>
		
		<br>
    
         
         
     <?php }?>  
		
	  </div>
	  
	  
	  <div class="w3-container w3-col" style="width:25%">
		 
	  </div>
	</div>

</div>
      
<script>
function w3_open() {
   
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("header").style.marginLeft = "15%";
  document.getElementById("mySidenav").style.width = "15%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("header").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
 
<a  onclick="document.getElementById('id01').style.display='block'" class="w3-btn-floating-large w3-pale-red postButton"><font color = "red">+</font></a> 



<div id="id02" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id02').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  
		  <?php foreach($details as $detail){?>
		  
			<center>
			<img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>img/hakeem_2.jpg" alt="Smiley face" height="150" width="150"> 
			</center>
			
			<h4>
				<center>
					<?php echo $detail->display_name;?>  
				</center>
			</h4>
			
    </header>
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		
		<p> 
			<b style = "left">Info</b> 
			<a class = "pointer" onclick="document.getElementById('id03').style.display='block'" style = "float: right;" > 
				<i  class="fa fa-edit fa-2x left" aria-hidden="true"></i> 
			</a>
		</p>
		
		
		
		<table>
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > First Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail->first_name;?>   </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Last Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail->last_name;?>   </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Middle Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail->middle_name;?>   </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail->email;?>   </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Contact No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php $a = $detail->contact_no; if( $a == '0') {echo "";} else {echo "$a";} ?>   </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Birthdate:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php $a = $detail->birthdate; if( $a == '0000-00-00') {echo "";} else {echo "$a";} ?>   </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Sex:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail->sex;?>   </font></p>
				</td>
			</tr>
		</table>
		<hr class = "hr">
		<?php }?>
		
		<?php foreach($details2 as $detail2){?>
		
		<p> <b>Student Info</b> </p>
		<table>
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Student No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail2->student_no;?> </font></p>
				</td>
			</tr>
			 
			<tr>
				<td>
					<p class = "infoMargin" > Course:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail2->course;?> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > College:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail2->college;?> </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Year Graduated:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php $a = $detail2->year_graduated; if($a == '0000'){echo "";} else {echo $a;} ?> </font></p>
				</td>
			</tr>
			
			
			
			
			
		</table>
		<hr class = "hr">
		<?php }?>
		
		<?php foreach($details3 as $detail3){?>
		<p> <b>Confessions</b> </p>
		<table>
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Confession Approved:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail3->confession_approved;?> </font></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Confession Requests:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail3->confession_requests;?> </font></p>
				</td>
			</tr>
						
		</table>
		<?php }?>
		  
		
		<br>
	</font>
    </div>
  </div>

</div>

<div id="id03" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
  
  <?php foreach($details as $detail){?>
  
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id03').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  
		<center>
			<img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>img/hakeem_2.jpg" alt="Smiley face" height="150" width="150"> 
		</center>
		  
	<form method = "POST" action ="update_info">	
		
		<h4>
			<center> 
				<input class = "userName" type "text" name = "display_name" value = "<?php echo $detail->display_name;?>">
			</center>
		</h4>
    </header>
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		
		<p> <b>Info</b> </p>
		<table>
			
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > First Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth" type = "text" name = "first_name" value = "<?php echo $detail->first_name;?>"  > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Last Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth" type = "text" name = "last_name" value = "<?php echo $detail->last_name;?>" > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Middle Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth" type = "text" name = "middle_name" value = "<?php echo $detail->middle_name;?>" > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth" type = "email" name = "email" value = "<?php echo $detail->email;?>"  > </p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Contact No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" ><input class = "inputWidth" type = "number" name = "contact_no" value = "<?php $a = $detail->contact_no; if( $a == '0') {echo "";} else {echo "$a";} ?>" ></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Birthdate:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <input class = "inputWidth" type = "date" name = "birthdate" value = "<?php $a = $detail->birthdate; if( $a == '0000-00-00') {echo "";} else {echo "$a";} ?>"></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Sex:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > 
					<select class="w3-select w3-border paddingtb inputWidth" name="sex">
						<option <?php $s = $detail->sex; if($s == "") echo "selected"?> value="" disabled selected>Choose your option</option>
						<option <?php $s = $detail->sex; if($s == "Male") echo "selected"?> value="Male">Male</option>
						<option <?php $s = $detail->sex; if($s == "Female") echo "selected"?> value="Female">Female</option>
					</select></p>
				</td>
			</tr>
		</table>
		
		<input style = "margin-left: 82%;" type = "submit" value = "save">
		</form>	
		
		<?php }?>  
		
		<hr class = "hr">
		
		<p> <b>Student Info</b> </p>
			
		<form method = "POST" action ="update_info2">
			<?php foreach($details2 as $detail2){?>
			<table>
				<tr >
					<td width = "28%">
						<p class = "infoMargin" > Student No:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <input class = "inputWidth" value = "<?php echo $detail2->student_no;?>" placeholder = "xx-xxx-xx" pattern = "\d{2}[\-]\d{3}[\-]\d{3}" type = "text" name = "student_no" ></p>
					</td>
				</tr>
					
				<tr>
					<td>
						<p class = "infoMargin" > Course:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <input class = "inputWidth" type = "text" name = "course" value = "<?php echo $detail2->course;?>"></p>
					</td>
				</tr>
				
				<tr>
					<td>
						<p class = "infoMargin" > College:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <select class="w3-select w3-border paddingtb inputWidth" name="college">
							<option <?php $c = $detail2->college; if($c == "") echo "selected"?> value="" disabled selected>Choose your option</option>
							<option <?php $c = $detail2->college; if($c == "College of Science") echo "selected"?> value="College of Science">College of Science</option>
							<option <?php $c = $detail2->college; if($c == "College of Engineering") echo "selected"?> value="College of Engineering">College of Engineering</option>
							<option <?php $c = $detail2->college; if($c == "College of Industrial Technology") echo "selected"?> value="College of Industrial Technology">College of Industrial Technology</option>
							<option <?php $c = $detail2->college; if($c == "College of Industrial Education") echo "selected"?> value="College of Industrial Education">College of Industrial Education</option>
							<option <?php $c = $detail2->college; if($c == "College of Architecture and Fine Arts") echo "selected"?> value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
							<option <?php $c = $detail2->college; if($c == "College of Liberal Arts") echo "selected"?> value="College of Liberal Arts">College of Liberal Arts</option>
						</select></p>
					</td>
				</tr>
				
				<tr >
					<td width = "25%">
						<p class = "infoMargin" > Year Graduated:</p>
					</td>
					
					<td>
						<p class = "infoMargin" ><input class = "inputWidth" type = "month" name = "year_graduated" value = "<?php echo $detail2->year_graduated;?>" ></p>
					</td> 
				</tr>
			</table>
			
			<input style = "margin-left: 82%;" type = "submit" value = "save">
			
			<?php }?>  
		</form>
		<hr class = "hr">			
		
		<br>
		<br>
	</font>
    </div>
  </div>

</div>

<div id="id04" class="w3-modal">
  <div style = "width: 40%; margin-top: -3%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id04').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h4><img style = "margin: -15% -.9% -2% -1%" src="<?php echo base_url();?>img/confession.png" height="35" width="35"> omments</h4>
    </header>
    <div class="w3-container ">
	
	<br>
	
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font faceimg style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">		
		<font face = "Calibri" size = "4" color = "black"> &nbsp; Hidden Name| </font> <font face = "Calibri" size = "4" color = "darkgray"> College </font>
		<div style = "margin-top: -1.5%" class="w3-container w3-section w3-pale-red w3-round w3-border">
			<p>
				<font face = "Calibri" size = "4" color = "darkred"> 
					<b>Confession Title</b>
				</font>
			</p>		
			
			<p class = "marginTop" ><font face = "Calibri" size = "4" >
			Confession - Text, 
			Confession - Text,
			Confession - Text, 
			Confession - Text, 
			Confession - Text, </font><hr class = "hr">
			</p> 
			
			<div> 
				<font class = "postMargin left" size = "2" >10 agrees / 2 disagrees </font>
				<font class = "postMargin right" size = "2" >time / date </font>
			</div>
		</div>
		
		
		<div class = "w3-border-bottom borderMargin" style = "margin-left: -16px; margin-right: -16px;" ></div>
		
		
		<p>
			
			<form>
				<img style = "margin: 0% 0% 0% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "left w3-circle imageCircle" alt="Smiley face" height="35" width="35">
				<input type = "text" style = "width: 90%;" class = "w3-input left" name = "comment" placeholder = "type your comment here">
			</form>
		</p>
		<br><br>
			<p>
			<img style = "margin: 0% 0% -2.3% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "w3-circle imageCircle" height="35" width="35">
			
				<font face = "Century Gothic" size = "3" color = "darkred"> 
					
					<b>Linkin Park</b>
				</font>
					
				<font face = "Century Gothic" size = "3" color = "black">
					I've become so numb, I can't feel you there. Become so tight so much more aware.
				</font>
				
				<font face = "Century Gothic" size = "2" color = "darkgray">
					time/date
				</font>		
		
			</p>
		<p>
			<p>
				<font face = "Century Gothic" size = "3" color = "darkred"> 
					<img style = "margin: 0% 0% -2.3% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "w3-circle imageCircle" height="35" width="35">
					<b>Linkin Park</b>
				</font>
					
				<font face = "Century Gothic" size = "3" color = "black">
					In the end it doesn't really matter.
				</font>
				
				<font face = "Century Gothic" size = "2" color = "darkgray">
					time/date
				</font>
			</p>		
		
		</p>
		
		<p>
			
			<p>
				<font face = "Century Gothic" size = "3" color = "darkred"> 
					<img style = "margin: 0% 0% -2.3% 0%" src="<?php echo base_url();?>img/hakeem_2.jpg" class = "w3-circle imageCircle" height="35" width="35">
					<b>Linkin Park</b>
				</font>
					
				<font face = "Century Gothic" size = "3" color = "black">
					We can't wait to burn it to the ground.
				</font>
				
				<font face = "Century Gothic" size = "2" color = "darkgray">
					time/date
				</font>
			</p>		
		
		</p>
		
		<br>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modal2) {
        modal2.style.display = "none";
    }
	if (event.target == modal3) {
        modal3.style.display = "none";
    }
	if (event.target == modal4) {
        modal4.style.display = "none";
    }
	
}
</script>

</body>
</html>