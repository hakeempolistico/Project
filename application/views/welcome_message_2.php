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
	<LINK REL="icon" HREF="<?php echo base_url();?>img/ushare4.png"/>
	<title>Welcome to Ushare</title>


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
						<font face = "Century Gothic" size = "5" color = "white"> Feed</font>
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
								  <i class="fa fa-circle fa-stack-2x" style="color: grey"></i>
								  <i class="fa fa-user-o fa-stack-1x fa-inverse"></i>
								</span>
						</a>
					</td>
					<td>
					<a class = "pointer w3-hover-none" style="margin-left: -30px" onclick="document.getElementById('id04').style.display='block'"><span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x" style="color: gray"></i>
						<i class="fa fa-bell-o fa-stack-1x fa-inverse"></i>
						<i class="fa fa-exclamation-circle fa-stack-1x" style="color: red; padding-left:28px; padding-top:10px;"></i>
					</span></a>
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
	  <div class="w3-green w3-container w3-col" style="width:25%">
		 
	  </div>
	  
	  <div class="w3-container w3-col" style="width:50%">	

		<?php foreach($posts as $post){?>
		<div id = "agree<?php echo $post->id_confession;?>">
		<div id = "agree<?php echo $post->id_confession;?> comments<?php echo $post->id_confession;?>">
		<img style = "margin: 0% 0% -1.5% 0%" src="<?php echo base_url();?>img/user1.png" alt="Smiley face" height="30" width="30">
		<font face = "Calibri" size = "4" color = "black"> &nbsp; <?php echo $post->hidden_name;?> | </font> <font face = "Calibri" size = "4" color = "darkgray"> <?php echo $post->college;?>	 </font>
		<div style = "margin-top: -1.5%" class="w3-container w3-section w3-pale-red w3-round w3-border">
			<p>
				<font face = "Calibri" size = "4" color = "darkred" align> 
					<b><?php echo $post->confession_title;?></b>
				</font>
			</p>		
			
		<p class = "marginTop" ><pre><font face = "Calibri" size = "3" ><?php echo $post->confession_text;?></font></pre><hr class = "hr">
			</p> 
						
			<?php foreach($details as $detail){?>
			<div ">
				<div class = "<?php $a = $post->agree; if($a==1){echo "fontBlue";}?>">
					<a href = "agree?idc=<?php echo $post->id_confession;?>&idu=<?php echo $detail->id_users;?>&agr=<?php echo $post->agree;?>&disagr=<?php echo $post->disagree;?>"> <i style = "margin-top: -2px; margin-right: 10px;" class="fa fa-thumbs-o-up left" aria-hidden="true">
						<font class = "postFont"> 
							Agree 
						</font> </i>
					</a> 
				</div>
				<div class = "<?php $a = $post->disagree; if($a==1){echo "fontBlue";}?>">
					<a href = "disagree?idc=<?php echo $post->id_confession;?>&idu=<?php echo $detail->id_users;?>&agr=<?php echo $post->agree;?>&disagr=<?php echo $post->disagree;?>"> <i style = "margin-top: -2px; margin-right: 10px;" class="fa fa-thumbs-o-down left" aria-hidden="true"> 
						<font class = "postFont"> 
							Disagree 
						</font></i>  
					</a>
				</div>
				<div id = "" class = "">
					<a href = "#comments<?php echo $post->id_confession;?>" onclick="myFunction('Demo<?php echo $post->id_confession;?>')"> <i style = "margin-top: -2px; margin-right: 15px;" class="fa fa-comments-o left" aria-hidden="true">
						<font class = "postFont"> 
							Comments
						</font></i>  
					</a>
				</div>
				<font class = "postMargin right" size = "2" ><?php echo $post->time;?> / <?php echo $post->date;?> </font>
			</div> <br>
			<div id="Demo<?php echo $post->id_confession;?>" class="w3-hide marginComment w3-animate-opacity">
			 	<ul class="w3-ul w3-pale-red postFont">
			 		<hr class = "hrComment">
			 		
			 		<li class = "liComment">
			 			<form method = "POST" action ="comment">	
			 							<input type="hidden" name="id_comment" value="">
			 							<input type="hidden" name="id_user_com" value="<?php echo $detail->id_users;?>">
			 							<?php }?> 
			 							<input type="hidden" name="id_confession_com" value="<?php echo $post->id_confession;?>">
			 							<input type="hidden" name="comm_date" value="<?php date_default_timezone_set('Asia/Manila');echo date("Y-m-d");?>">
			 							<input type="hidden" name="comm_time" value="<?php date_default_timezone_set('Asia/Manila');echo date("h:ia");?>">
			 							<input type="text" name="comment_text" class = "commentBox" placeholder="type your comment..." autocomplete="off">
			 							<input type="submit" style="position: absolute; left: -9999px">			
			 			</form>
			 		</li>
			 		<?php foreach($comments as $comment){?>
				 		<?php $a = $post->id_confession; $b = $comment->id_confession_com; if($a==$b) { ?>
							<li class = "liComment"> 
				    		<font color = "gray">
				    			<?php $a = $post->id_confession; $b = $comment->id_confession_com; if($a==$b) {echo $comment->display_name;}?>
				    		</font>  <?php $a = $post->id_confession; $b = $comment->id_confession_com; if($a==$b) {echo $comment->comment_text;}?> 
				    		<font class = "timeComment">  
				    			<?php $a = $post->id_confession; $b = $comment->id_confession_com; if($a==$b) {echo $comment->comm_date." / ";}?>  <?php $a = $post->id_confession; $b = $comment->id_confession_com; if($a==$b) {echo $comment->comm_time;}?> 
				    		</font>
				    		</li>
						<?php } ?>
			    	
					<?php }?>	    	
			  	</ul>  
			</div>
		</div>	
		
		<br>
    </div>
   
     <?php }?>  
		
	  </div>
	  
	  
	  <div class="w3-container w3-col" style="width:25%">
		 
	  </div>
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
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
 
<a  onclick="document.getElementById('id01').style.display='block'" class="w3-btn-floating-large w3-pale-red postButton"><font color = "red">+</font></a> 
<div id="id01" class="w3-modal">
  <div style = "width: 40%; margin-top: -3%; margin-bottom: 3%;" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h4><img style = "margin: -15% -.9% -2% -1%" src="<?php echo base_url();?>img/confession.png" height="35" width="35"> onfess</h4>
    </header>
    <div class="w3-container ">
	
		<p>
		<?php foreach($details3 as $detail3){?>	
			<form method = "POST" action ="reqcon">
				<input type = "hidden" name = "id_request"> 
				<input type = "hidden" name = "date" value = "<?php echo date("Y-m-d");?>"> 
				<input type = "hidden" name = "time" value = "<?php echo date("h:ia");?>"> 
				<input type = "hidden" name = "id_users" value = "<?php echo $detail3->id_confession_info;?>"> 
				<label class="w3-label w3-validate"><h4>Confession Title</h4></label>
					<input class = "w3-round textBox w3-border-red confessBox" type = "text" name = "request_title" placeholder = "Confession title" required>
				<label class="w3-label w3-validate"><h4>Confession Text</h4></label>
					<textarea rows = "5" class = "w3-round textArea w3-border-red confessBox" name = "request_text" placeholder="type your confession here..." required> </textarea>	
						
		
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
					<p class = "infoMargin" ><input class = "inputWidth confessBox" type = "text" name = "contact_no" value = "<?php $a = $detail->contact_no; if( $a == '0') {echo "";} else {echo "$a";} ?>" ></p>
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
<div style = "width: 25%; margin-right: 1%" class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id04').style.display='none'"></span>
			<h4>
				<center>
					Notifications
				</center>
			</h4>
			
    </header>	
    <div style="overflow-y:scroll;">
    <div class="w3-container" style="padding: 0px;">
	
	<font face = "Century Gothic" size = "3" >
		
		<table id = "mytable" class="w3-bordered">
			<?php $i = 0; foreach($notifications as $notification){ if(++$i > 5) break;?>
			<tr class="notiRow" onclick="Function('<?php echo $notification->confession_title;?>')">			
				<td class="trPad" width = "35%" >
					<p class = "infoMargin noti"><font class = "notiTitle" >"<?php echo $notification->confession_title;?>"</font> has been approved <br> <font class="notiTime"><?php echo $notification->time;?> / <?php echo $notification->date;?></font></p>
				</td>
			</tr>
			<script>
				function Function(x) {
				        var table = document.getElementById('mytable');		
						window.location="notifications?title=" + x; 
				}
			</script>
			<?php } ?>
			<?php $i = 0; foreach($notifications as $notification){ if(++$i > 1) break;?>
			<tr class="notiRow">
				<td class="trPad" width = "35%">
					<p class = "infoMargin noti" align="center"> <a onclick="document.getElementById('id05').style.display='block'" class="seeAll"> See All Notifications</a></p>
				</td>
			</tr>
			<?php } ?>
			
		</table>		  
	</font>
    </div>
	</div>
	</div>
  </div>
 
  <div id="id05" class="w3-modal" style="margin-bottom: 30px;">
<div style = "width: 25%; margin-right: 1%; margin-bottom: 2%; " class="w3-modal-content w3-animate-top">
    <header class="w3-container postModal">
		  <span onclick="document.getElementById('id05').style.display='none'"></span>
			<h4>
				<center>
					Notifications
				</center>
			</h4>
			
    </header>	
    <div style="overflow-y:scroll;">
    <div class="w3-container" style="padding: 0px; max-height: 450px" >
	
	<font face = "Century Gothic" size = "3" >
		
		<table class="w3-bordered">
			<?php $i = 0; foreach($notifications as $notification){ ?>
			<tr class="notiRow" onclick="Function('<?php echo $notification->confession_title;?>')">			
				<td class="trPad" width = "35%">
					<p class = "infoMargin noti"> <font ><font color="darkblue">"<?php echo $notification->confession_title;?>"</font> has been approved <br> <font class="notiTime"><?php echo $notification->time;?> / <?php echo $notification->date;?></font></p>
				</td>
				
			</tr>

			<script>
				function Function(x) {
				        var table = document.getElementById('mytable');		
						window.location="notifications?title=" + x; 
				}
			</script>
		    <?php } ?>
			
		</table>		  
	</font>
    </div>
    </div>
	</div>
  </div>
  
  </div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');
var modal5 = document.getElementById('id05');
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
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
	
}
</script>
</body>
</html>