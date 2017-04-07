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

	<a style = "padding: 4%" href="/admin/admin">
		<font color = "white" size = "3" style = "margin-left: 25%;" >
			<img style = "margin-right: 6%" src="<?php echo base_url();?>img/admin_2.png" alt="Smiley face" height="20" width="20">Admin
		</font>
	</a>

	
	<a style = "padding: 4%" href="/admin/logout">
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
						<a href = "/view/contact_us"><img style = "margin-right: 3%" src="<?php echo base_url();?>img/phone.png" height="17" width="15s">Contact Us</a> 
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
  	<?php foreach($admins2 as $admin){?>
	
  			<table style="margin-top: -10px; margin-bottom: -10px">
				<tr style="padding: -3px;">
					<td>
						<a class = "pointer w3-hover-none" onclick="document.getElementById('id02').style.display='block'">
							<font face = "Century Gothic" size = "5" color = "white"> <?php echo $admin->first_name;?>  </font>
						</a>
					</td>
					<td>
						<a style="margin-left: -30px;" class = "pointer w3-hover-none" onclick="document.getElementById('id02').style.display='block'">
								<img class = "w3-circle imageCircle" style = "margin: 0px 0px -10px 0px;" src="<?php echo base_url();?>uploads/admin.jpg" onerror="this.src='<?php echo base_url();?>img/try.jpg'" alt="Smiley face" height="45" width="45"> 
						</a>
					</td>
				</tr>	
				
			</table>
	<?php }?>

  </li>
  <li class = "w3-right"></li>
</ul>
 

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
			    		<form method = "POST" action ="/admin/approveRequest">
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

			    		<form method = "POST" action ="/admin/declineRequest">
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
 


<div id="id02" class="w3-modal">
 <?php foreach($admins2 as $admin){?>
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id02').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  
		  
			<center>
			<img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>uploads/admin.jpg" onerror="this.src='<?php echo base_url();?>img/try.jpg'" alt="Smiley face" height="150" width="150"> 
			</center>
			
			<h4>
				<center>
					<?php echo $admin->first_name;?> 
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
					<p class = "infoMargin" > <font color = "gray"> <?php echo $admin->first_name;?>    </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Last Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $admin->last_name;?>    </font></p>
				</td>
			</tr>
			
			<tr >
				<td width = "28%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> <?php echo $admin->email;?>   </font></p>
				</td>
			</tr>
			

		</table>
		<hr>

	<?php }?>

		<p> <b>Activites</b>  <a href="#" onclick="document.getElementById('id04').style.display='block'" style="float: right;"> See Admin Log</a> </p>
		<table>
			 
			<tr>
				<td width = "28%">
					<p class = "infoMargin" > Status:</p>
				</td>
				
				<td>
					<p class = "infoMargin" > <font color = "gray"> Active </font></p>
				</td>
			</tr>
			
		</table>
  		
		<br>
	</font>
    </div>
  </div>

</div>

<div id="id03" class="w3-modal">
 
  <div style = "width: 40%; margin-top: -1%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
 
  
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id03').style.display='none'"
		  class="w3-closebtn">&times;</span>
		  
		<center>
			<img class = "w3-circle imageCircle" style = "margin: -15% 0% -1.5% -1%" src="<?php echo base_url();?>uploads/admin.jpg" onerror="this.src='<?php echo base_url();?>img/try.jpg'" alt="Smiley face" height="150" width="150"> 

		</center>
	<?php foreach($admins2 as $admin){?>
  
	
		
		<h4>
			<center> 
				<input class = "userName confessBox" type "text" name = "" value = "<?php echo $admin->first_name;?>">

			</center>
		</h4>
    </header>

    <form method = "POST" action ="updateInfo">	
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >
		
		<p> <b>Info</b> </p>
		<table>

			<tr >
				<td width = "28%">
					<p class = "infoMargin" > First Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "text" name = "first_name" value = "<?php echo $admin->first_name;?>"  > </p>
				</td>
			</tr>
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Last Name:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "text" name = "last_name" value = "<?php echo $admin->last_name;?>" > </p>
				</td>
			</tr>
			
			
			<tr >
				<td width = "25%">
					<p class = "infoMargin" > Email:</p>
				</td>
				
				<td>
					<p class = "infoMargin" >  <input class = "inputWidth confessBox" type = "email" name = "email" value = "<?php echo $admin->email;?>"  > </p>
				</td>
			</tr>
			
		</table>
			
		
		
		<hr>
		
		<p> <b>Activities</b> </p>
			
			<table>
					
				<tr>
					<td width = "25%">
						<p class = "infoMargin" > Status:</p>
					</td>
					
					<td>
						<p class = "infoMargin" > <input class = "inputWidth confessBox" type = "text" name = "status" value = "<?php echo $admin->status;?>"></p>
					</td>
				</tr>
				
				
			</table>
			
			<input style = "margin-left: 82%;" type = "submit" value = "save"> <br>
			
		</form>
		<?php }?>	
		<br>
	</font>
    </div>
  </div>

</div>

<div id="id04" class="w3-modal">
  <div style = "width: 40%; margin-top: 8%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <div class="w3-container ">
	
	<font face = "Century Gothic" size = "3" >

	<p> <b>Admin Logs </b> </p>

		<table class="w3-table-all w3-medium adminTable">
			    <tr style="background-color: darkred; color: white;">
			      <th>Logged In</th>
			      <th>Logged Out</th>
			    </tr>
			    <?php foreach($adminlogs as $log){?>

			    <tr>
				    <td><?php echo date('M d,Y h:sa',$log->login);?></td>
				    <td><?php if($log->logout==0){echo "--";} else echo date('M d,Y h:sa',$log->logout);?></td>     
			    </tr>
			     <?php }?>	

			</table>  		
		<br>
	</font>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
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