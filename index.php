<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #7f8c8d">
	<div id="main-wrapper">
		<center>
			<h2>Login Form</h2>
			<img src="images/avatar.png" class="avatar">
		</center>
	
		<form class="myform" action="index.php" method="post" >
			<label>UserName</label>
			<input type="text" class="inputvalues" ="name" placeholder="Type your username">
			<br>
			<br>
			<label>Password</label>
			<input type="password" class="inputvalues" placeholder="Type your password"><br><br>
			<input type="submit" id="login_btn" value="Login"><br><br>
			<input type="button" id="register_btn" value= "Register" ><br>
		</form>
	</div>

</body>
</html>
