<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<title>My Form</title>
<style type="text/css">
	.error {color: #FF0000;}
	#c{ 
		color:#ffffff;
		background-color:rgb(192,192,192);
	}
	#i{ padding:20px;
		margin-left: 450px;
		width:400px;
		background-color:rgb(147,112,219);
		align:center;
		border:2px solid DodgerBlue;
	}
	#v{
		color: #ffffff;
	}
</style>
<script language="javascript" type="text/javascript"> 
<!--  
//Browser Support Code 
function ajaxFunction(){ 
 var ajaxRequest;  // The variable that makes Ajax possible! 
  
 try{ 
7.  AJAX ─ Database Operations 
Ajax 
15 
 
   // Opera 8.0+, Firefox, Safari 
   ajaxRequest = new XMLHttpRequest(); 
 }catch (e){ 
   // Internet Explorer Browsers 
   try{ 
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
   }catch (e) { 
      try{ 
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
      }catch (e){ 
         // Something went wrong 
         alert("Your browser broke!"); 
         return false; 
      } 
   } 
 } 
 // Create a function that will receive data  
 // sent from the server and will update 
 // div section in the same page. 
 ajaxRequest.onreadystatechange = function(){ 

 // Now get the value from user and pass it to 
 // server script. 
 var username = document.getElementById('1').value; 
 var email = document.getElementById('2').value; 
 var password = document.getElementById('3').value; 
 var myfile = document.getElementById('4').value; 
 var queryString = "&username=" + username ; 
 queryString +=  "&email=" + email + "&password=" + password+"&myfile="+ myfile; 
 ajaxRequest.open("GET", "http://localhost/panel/index.php/form" + queryString, true); 
 ajaxRequest.send('username','email','password','myfile');  
} 
//--> 
</script> 
</head>
<body id="c">



<?php echo form_open('form'); ?>
<div id="i">
<form  name="myform" method="post" >
<strong>
<h2 align="center">Registration Form<div align="right"><a href="http://localhost/panel/index.php/login_controller" style="color: #ffffff">Login</a></div></h2>
</strong>

<hr width="400px">
<h4>Username</h4>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50"  id="1"/>
  <span class="error">* </span>
<br>  

<h4>Email Address</h4>
<input type="email" name="email" value="<?php echo set_value('email'); ?>" size="50" id="2"/>
  <span class="error">* </span>
<br>

<h4>Password</h4>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" id="3" />
  <span class="error">* </span>
  <br>

<h4>Password Confirm</h4>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
  <span class="error">* </span>
  <br>

<h4>Photo Upload</h4>
<input type="file" name="myfile" value="<?php echo set_value('myfile'); ?>"  size="50" id="4" />
  <span class="error">* </span>
  <br><br>
<div align="center"><input type="submit" value="Submit" width="200px" onclick="ajaxFunction()" /></div>
<hr><br><br>
</form>

<div>
	  <span id="v"><?php echo validation_errors(); ?></span>
  <br><br>
</div>

</body>
</html>