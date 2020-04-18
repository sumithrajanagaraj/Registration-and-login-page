<?php
require "connection.php"
?>
<html>
<title>My login page</title>
<head>
<style>
h1{text-align:center; color:red; background-color:white; margin:0px;font-size:50px;}
p{margin-top:0px; color:black;}
body{background-color:white;}
legend{text-align:center;font-size:60; }
label{font-size:30;text-align:center;}
.center{text-align:center;}
a{text-decoration:none; color:red; padding:5px; }
.a1{border:2px solid red; padding:10px; color:red; font-size:20px;}
</style>
</head>
<body>
<br>
<br>
<br>
<fieldset>
<legend>
<p>Login page</p>
</legend><p class="center">
<label for="name">Name &#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;:</label>
<input type="text" title="Enter the name;"><br><br>
<label for="pwd">Password:</label>
<input type="password" title="Enter the password"><br><br><br><br>
<a href="welcome.php">
<input type="submit" value="Log In" name="submit" class="a1"><br><br>
</a>
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['First_name'])&&isset($_POST['pass']))
	$password=md5($_POST['pass']);
    $fname=$_POST['First_name'];
	$sql="SELECT Name,Password FROM register_info where Name='$fname' AND password='$password'";
	$result->$conn->query($sql);
	if($result)
	{
		echo "Welcome!!";
		
	}
	else
	{
		echo "Username or password is incorrect!!.";
	}
}
?>
<a href="forget">Forgetten Password</a><br><br><br>
</p>
<p style="text-align:center;">
<a href="Registration.php" style="border:2px solid red; font-size:30px;">REGISTER</a>
</p>
</fieldset>
</body>
</html>