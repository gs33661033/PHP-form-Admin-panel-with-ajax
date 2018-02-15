<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	#c{ 
		color:#ffffff;
		background-color:rgb(192,192,192);
	}
	#i{ padding:20px;
		margin-left: 450px;
		margin-top:100px;
		width:400px;
		background-color:rgb(147,112,219);
		align:center;
		border:2px solid DodgerBlue;
	}
	</style>
</head>
<body id="c">
<div id="i">
<form>
 <h2>ADMIN LOGIN<div align="right"><a href="http://localhost/panel/index.php/form" style="color:#ffffff">sign up</a></div></h2>
 <hr>
 <h4>Username</h4>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<br>  

<h4>Password</h4>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
  <br><br>

  <div align="center"><input type="submit" value="Login" width="200px" /></div>
  <hr>
</form>
</div>


</body>
</html>
