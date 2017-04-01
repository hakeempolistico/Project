<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>img/w3.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/home.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/admin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome-4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<LINK REL="icon" HREF="<?php echo base_url();?>img/ushare4.png"/>
	<title>Ushare Admin</title>



	
<body style = "background-color: #fbf3f2;">

<nav class="w3-sidenav theme2 w3-card-2 none" style="display:none;z-index:4" id="mySidenav">
  	<a href="javascript:void(0)"
  	onclick="w3_close()"
  	class="w3-closenav w3-large snpad"  > 
  		<font class = "tAlignR white">  
  			&times; 
  		</font>
 	</a>
  	
  	
  	<hr class = "sideNavHr">

	<a style = "padding: 4%;" href="feed">
		<font color = "white" size = "3" style = "margin-left: 25%;">
			<img style = "margin-right: 6%;" src="<?php echo base_url();?>img/home_2.png" alt="Smiley face" height="20" width="20">Feed
		</font>
	</a>

	<?php foreach($details as $detail){?>
		<?php $a = $detail->admin; if($a==1) { ?>
	<a style = "padding: 4%" href="admin">
		<font color = "white" size = "3" style = "margin-left: 25%;" >
			<img style = "margin-right: 6%" src="<?php echo base_url();?>img/admin_2.png" alt="Smiley face" height="20" width="20">Admin
		</font>
	</a>
		<?php } ?>
	<?php } ?>
	
	<a style = "padding: 4%" href="people">
		<font color = "white" size = "3" style = "margin-left: 25%;" >
			<img style = "margin-right: 6%" src="<?php echo base_url();?>img/people_2.png" alt="Smiley face" height="20" width="20">People
		</font>
	</a>
	
	<a style = "padding: 4%" href="about">
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
	
	<br><br><br><br>	<br><br><br><br><br><br><br>
	
	<hr class = "sideNavHr" style="margin-bottom:0%">
				<font color = "darkgray" size = "2">
						<center>
						<a href = "contact_us"><img style = "margin-right: 7%" src="<?php echo base_url();?>img/phone.png" height="17" width="15s">Contact Us</a> 
						</center>
				</font>
			<hr class = "sideNavHr" style="margin-top:0%">	
			
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

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<?php foreach($details as $detail){?>
<div id="header">
	<header style = "position: fixed; width: 100%;">
	<ul class="w3-navbar theme w3-padding-16" >
  <div id="header2">
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
						<font face = "Century Gothic" size = "5" color = "white"> Admin</font>
					</td>
				</tr>	
		</table>
  </li>
  </div>
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
								  <i class="fa fa-circle fa-stack-2x" style="color: gray"></i>
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
<br><br><br><br><br>

	<div class="w3-row">
	  <div class="w3-green w3-container w3-col" style="width:12.5%">
		 
	  </div>
	  
	  	<div class="w3-container w3-col" style="width:75%">	
	  	<h3 class="subtitle">Dashboard</h3>
	  		<div class="w3-row">
    			<div class="w3-container w3-quarter" style="padding: 0px;">
         			<div class="w3-green w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-users fa-4x marg2" aria-hidden="true"></i> <br> <?php foreach($users as $user){?><?php echo $user->count;?> <?php }?><br>Users</p>
  	   				</div>
    			</div>
    			<div class="w3-container w3-quarter" style="padding: 0px;">
        			<div class="w3-blue w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-paper-plane fa-4x marg2" aria-hidden="true"></i> <br> <?php foreach($requests as $request){?><?php echo $request->count;?> <?php }?> <br>Confession Requests</p>
  	   				</div>
  				</div>
  				<div class="w3-container w3-quarter" style="padding: 0px;">
        			<div class="w3-pink w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-check fa-4x marg2" aria-hidden="true"></i> <br> <?php foreach($appr as $appr){?><?php echo $appr->count;?> <?php }?> <br>Confessions Approved</p>
  	   				</div>
  				</div>
  				<div class="w3-container w3-quarter" style="padding: 0px;">
        			<div class="w3-indigo w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-ravelry fa-4x marg2" aria-hidden="true"></i> <br> <?php foreach($suggs as $sugg){?><?php echo $sugg->count;?> <?php }?> <br>Suggestions</p>
  	   				</div>
  				</div>
  				<div class="w3-container w3-quarter" style="padding: 0px;">
         			<div class="w3-red w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-user fa-4x marg2" aria-hidden="true"></i> <br> <?php foreach($active as $active){?><?php echo $active->count;?> <?php }?> <br>Active Users</p>
  	   				</div>
    			</div>
    			<div class="w3-container w3-quarter" style="padding: 0px;">
        			<div class="w3-blue-grey w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-dollar fa-4x marg2" aria-hidden="true"></i> <br> 1 500 <br>Donation</p>
  	   				</div>
  				</div>
  				<div class="w3-container w3-quarter" style="padding: 0px;">
        			<div class="w3-deep-orange w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-superpowers fa-4x marg2" aria-hidden="true"></i> <br> <?php foreach($admins as $admin){?><?php echo $admin->count;?> <?php }?> <br>Administrators</p>
  	   				</div>
  				</div>
  				<div class="w3-container w3-quarter" style="padding: 0px;">
        			<div class="w3-purple w3-hover-darkred w3-padding-12 w3-center">
   						<p><i class="fa fa-envira fa-4x marg2" aria-hidden="true"></i> <br> 69 <br>Moral Supporters</p>
  	   				</div>
  				</div>

			</div>
			<br>
			<hr style="border-color: darkgrey; border-width: 1px;">
	  		<h3 class="subtitle">Admin Panel</h3>			
				

			<div class="w3-container con">
			  <div class="w3-row">
			    <a href="javascript:void(0)" onclick="openCity(event, 'Requests');">
			      <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding w3-border-red">Requests</div>
			    </a>
			    <a href="javascript:void(0)" onclick="openCity(event, 'Approved');">
			      <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">Approved</div>
			    </a>
			    <a href="javascript:void(0)" onclick="openCity(event, 'Declined');">
			      <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">Declined</div>
			    </a>
			    <a href="javascript:void(0)" onclick="openCity(event, 'Suggestions');">
			      <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">Suggestions</div>
			    </a>
			  </div>

			  <div id="Requests" class="w3-container city" style="display:block">
			  	<h3 class="subtitle">Requested Confessions</h3>
			    <p>List of requested confessions to be approved or declined.</p> 

			    <table class="w3-table-all w3-small adminTable">
			    <tr style="background-color: darkred; color: white;">
			      <th class="th">ID</th>
			      <th>Account No</th>
			      <th>Title</th>
			      <th>Text</th>
			      <th>Hidden Name</th>
			      <th>College</th>
			      <th>Date</th>
			      <th>Time</th>
			      <th class="adminTD">Action</th>
			    </tr>
			<?php foreach($posts2 as $post){?>
			    <tr>
			    <td><?php echo $post->id_request;?></td>
			    <td><?php echo $post->id_users;?></td>
			    <td><?php echo $post->request_title;?></td>
			    <td><?php echo $post->request_text;?></td>
			    <td><?php echo $post->hidden_name;?></td>
			    <td><?php echo $post->college;?></td>
			    <td><?php echo $post->date;?></td>
			    <td><?php echo $post->time;?></td>
			    <td class="adminTD"><font color = "darkred">
			    		<form method = "POST" action ="approveRequest">
			    			<input type = "hidden" name = "id_confession" value = "">
			    			<input type = "hidden" name = "id_request" value = "<?php echo $post->id_request;?>">
			    			<input type = "hidden" name = "id_users" value = "<?php echo $post->id_users;?>">
			    			<input type = "hidden" name = "confession_title" value = "<?php echo $post->request_title;?>">
			    			<input type = "hidden" name = "confession_text" value = "<?php echo $post->request_text;?>">
			    			<input type = "hidden" name = "hidden_name" value = "<?php echo $post->hidden_name;?>">
			    			<input type = "hidden" name = "college" value = "<?php echo $post->college;?>">
			    			<input type = "hidden" name = "date" value = "<?php echo date("Y-m-d");?>">
			    			<input type = "hidden" name = "time" value = "<?php echo date("h:ia");?>">
			    			<input class="approve approveButton" type = "submit" value = "approve">
			    		</form>

			    		<form method = "POST" action ="declineRequest">
			    			<input type = "hidden" name = "id_request" value = "<?php echo $post->id_request;?>">
			    			<input class="approve approveButton" type = "submit" value = "decline">
			    		</form>
							

						
					</font>
			    </td>
			      
			    </tr>
			<?php }?>
			</table>
			
			  </div>

			  <div id="Approved" class="w3-container city" style="display:none">
				<h3 class="subtitle">Approved Confessions</h3>
			    <p>List of approved confessions</p> 

			    <table class="w3-table-all w3-small adminTable">
			    <tr style="background-color: darkred; color: white;">
			      <th class="th">ID</th>
			      <th>Account No</th>
			      <th>Title</th>
			      <th>Text</th>
			      <th>Hidden Name</th>
			      <th>College</th>
			      <th>Date</th>
			      <th>Time</th>
			    </tr>
			<?php foreach($approved as $post){?>
			    <tr>
				    <td><?php echo $post->id_request;?></td>
				    <td><?php echo $post->id_users;?></td>
				    <td><?php echo $post->request_title;?></td>
				    <td><?php echo $post->request_text;?></td>
				    <td><?php echo $post->hidden_name;?></td>
				    <td><?php echo $post->college;?></td>
				    <td><?php echo $post->date;?></td>
				    <td><?php echo $post->time;?></td>      
			    </tr>
			<?php }?>
			</table>
			
			  </div>

			  <div id="Declined" class="w3-container city" style="display:none">
			    <h3 class="subtitle">Declined Confessions</h3>
			    <p>List of declined confessions.</p> 

			    <table class="w3-table-all w3-small adminTable">
			    <tr style="background-color: darkred; color: white;">
			      <th class="th">ID</th>
			      <th>Account No</th>
			      <th>Title</th>
			      <th>Text</th>
			      <th>Hidden Name</th>
			      <th>College</th>
			      <th>Date</th>
			      <th>Time</th>
			    </tr>
			<?php foreach($declined as $post){?>
			    <tr>
				    <td><?php echo $post->id_request;?></td>
				    <td><?php echo $post->id_users;?></td>
				    <td><?php echo $post->request_title;?></td>
				    <td><?php echo $post->request_text;?></td>
				    <td><?php echo $post->hidden_name;?></td>
				    <td><?php echo $post->college;?></td>
				    <td><?php echo $post->date;?></td>
				    <td><?php echo $post->time;?></td>      
			    </tr>
			<?php }?>
			</table>
			
			  </div>

			  <div id="Suggestions" class="w3-container city" style="display:none">
			    <h3 class="subtitle">Suggestions</h3>
			    <p>List of suggestions.</p> 

			    <table class="w3-table-all w3-small adminTable">
			    <tr style="background-color: darkred; color: white;">
			      <th class="th">ID</th>
			      <th>Name</th>
			      <th>Email</th>
			      <th>Suggestion_Text</th>
			    </tr>
			<?php foreach($suggestions as $post){?>
			    <tr>
				    <td><?php echo $post->id_suggestion;?></td>
				    <td><?php echo $post->name;?></td>
				    <td><?php echo $post->email;?></td>
				    <td><?php echo $post->suggestion_text;?></td>  
			    </tr>
			<?php }?>
			</table>
			
			  </div>
			</div>
			

			
	  </div>
	
	  
	  <div class="w3-container w3-col" style="width:12.5%">
		 
	  </div>
	</div>

</div>
      
<script>
function w3_open() {
   
  document.getElementById("main").style.marginLeft = "10%";
  document.getElementById("main").style.width = "100%";
  document.getElementById("header2").style.marginLeft = "205px";
  document.getElementById("mySidenav").style.width = "205px";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
  document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("header2").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
  document.getElementById("myOverlay").style.display = "none";
}

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>
 
<div id="id01" class="w3-modal">
  <div style = "width: 40%; margin-top: -3%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h4><img style = "margin: -15% -.9% -2% -1%" src="<?php echo base_url();?>img/confession.png" height="35" width="35"> onfess</h4>
    </header>
    <div class="w3-container ">
	
		<p>
			<form method = "POST" action ="reqcon">
				<input type = "hidden" name = "id_confession"  > 
				<input type = "hidden" name = "date" value = "<?php echo date("Y-m-d");?>"> 
				<input type = "hidden" name = "time" value = "<?php echo date("h:ia");?>"> 
				<input type = "hidden" name = "account_name"> 


				<h4>Confession Title</h4>
					<input class = "w3-round textBox w3-border-red" type = "text" name = "confession_title" placeholder = "Confession title">
				<h4>Confession Text</h4> 
					<textarea rows = "5" class = "w3-round textArea  w3-border-red" name = "confession_text" > </textarea>	

						
		<?php foreach($details3 as $detail3){?>
		<input type = "hidden" name = "hidden_name" value="<?php echo $detail3->hidden_name;?>">
		<?php }?>


		<?php foreach($details2 as $detail2){?>
		<input type = "hidden" name = "college" value = "<?php echo $detail2->college;?>">
		<?php }?>
										
					<br>
				<font style = "Century Gothic" size = "2" color = "red"> <br> *You will be notified once confession request is approved. </font>
				<input style = "margin: -4px 0px 10px 0px;" class = "w3-round padding right w3-btn w3-white w3-border w3-border-red" type = "submit" value = "Confess" >
			</form>
			<br>
			
		</p>
    </div>
  </div>
</div>

<div id="id02" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id02').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  
		  <?php foreach($details as $detail){?>
		  
			<center>
			<img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>uploads/<?php echo $detail->id_users;?>.jpg" onerror="this.src='<?php echo base_url();?>img/try.jpg'" alt="Smiley face" height="150" width="150"> 
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
		<hr>
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
		<hr>
		<?php }?>
		
		<?php foreach($details3 as $detail3){?>
		<p> <b>Confessions</b> </p>
		<table>
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Hidden Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $detail3->hidden_name;?> </font></p>
				</td>
			</tr>

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
			<img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>uploads/<?php echo $detail->id_users;?>.jpg" onerror="this.src='<?php echo base_url();?>img/try.jpg'" alt="Smiley face" height="150" width="150"> 

			<?php echo form_open_multipart('users/do_upload');?>
				<input type = "hidden" name = "fn" value = "<?php echo $detail->id_users;?>" >
				<input type="file" name="userfile" size="20" />
				<input type="submit" value="upload" />
				</form>
		</center>
		  
	<form method = "POST" action ="update_info">	
		
		<h4>
			<center> 
				<input class = "userName confessBox" type "text" name = "display_name" value = "<?php echo $detail->display_name;?>">

			</center>
		</h4>
    </header>
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		
		<p> <b>Info</b> </p>
		<table>

			<input type = "hidden" name="id_users" value="<?php echo $detail->id_users;?>">
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > First Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "text" name = "first_name" value = "<?php echo $detail->first_name;?>"  > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Last Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "text" name = "last_name" value = "<?php echo $detail->last_name;?>" > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Middle Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "text" name = "middle_name" value = "<?php echo $detail->middle_name;?>" > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "email" name = "email" value = "<?php echo $detail->email;?>"  > </p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Contact No:</p>
				</td>
				
				<td>
					<p class = "infoMargin" ><input class = "inputWidth confessBox" type = "number" name = "contact_no" value = "<?php $a = $detail->contact_no; if( $a == '0') {echo "";} else {echo "$a";} ?>" ></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Birthdate:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <input class = "inputWidth confessBox" type = "date" name = "birthdate" value = "<?php $a = $detail->birthdate; if( $a == '0000-00-00') {echo "";} else {echo "$a";} ?>"></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p class = "infoMargin" > Sex:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > 
					<select class="w3-select w3-border paddingtb inputWidth confessBox" name="sex">
						<option <?php $s = $detail->sex; if($s == "") echo "selected"?> value="" disabled selected>Choose your option</option>
						<option <?php $s = $detail->sex; if($s == "Male") echo "selected"?> value="Male">Male</option>
						<option <?php $s = $detail->sex; if($s == "Female") echo "selected"?> value="Female">Female</option>
					</select></p>
				</td>
			</tr>
		</table>
			
		
		<?php }?>  
		
		<hr>
		
		<p> <b>Student Info</b> </p>
			
			<?php foreach($details2 as $detail2){?>
			<table>
				<input type = "hidden" name="id_users" value="<?php echo $detail2->id_users;?>">

				<tr >
					<td width = "28%">
						<p class = "infoMargin" > Student No:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <input class = "inputWidth confessBox" value = "<?php echo $detail2->student_no;?>" placeholder = "xx-xxx-xx" pattern = "\d{2}[\-]\d{3}[\-]\d{3}" type = "text" name = "student_no" ></p>
					</td>
				</tr>
					
				<tr>
					<td>
						<p class = "infoMargin" > Course:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <input class = "inputWidth confessBox" type = "text" name = "course" value = "<?php echo $detail2->course;?>"></p>
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
						<p class = "infoMargin" ><input class = "inputWidth confessBox" type = "month" name = "year_graduated" value = "<?php echo $detail2->year_graduated;?>" ></p>
					</td> 
				</tr>
			</table>
			
			<?php }?>  
		
		<hr>			
		
		<p> <b>Confession Info</b> </p>
			
		
			<?php foreach($details3 as $detail3){?>
			<table>
				<input type = "hidden" name="id_users" value="<?php echo $detail3->id_users;?>">

				<tr >
					<td width = "28%">
						<p class = "infoMargin" > Hidden Name:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <input class = "inputWidth confessBox" value = "<?php echo $detail3->hidden_name;?>" placeholder = "hidden name" type = "text" name = "hidden_name" ></p>
					</td>
				</tr>
					
			</table>
			
			<input style = "margin-left: 82%;" type = "submit" value = "save"> <br>
			
			<?php }?>  
		</form>

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