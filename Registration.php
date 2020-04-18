
<html>
<title>Registration Form</title>
<head>
<style>
body{ background-color:gray;}
p{ font-size:40; color:red; text-align:center;}
fieldset{background-image:url('img.jpg'); background-repeat:no-repeat; background-size:cover; border:6px solid red; margin-top:0em; padding=0em;}
div{background-color:white;margin-top:0em;}
b{font-size:30; color:white;}
a{text-decoration:none; color:red; padding:0px;  font-size:40px; margin:0em; }
.or{color:black;}
</style>
</head>
<body>

<form method="post" action="submit.php">
<p style="text-align:center;">
<a href="login.php">LOGIN</a>
<p class="or">OR</p>
<p style="color:red;font-size:40px; text-align:center; padding:0em; margin:0em;">Register</p>
<table>
<colgroup width="100%">
<col width="50%">
<col width="50%">
</colgroup>
<fieldset>
<legend>
<p><?php echo "Registration Form" ?></p>
</legend>
<b><label for="name">First Name:</label></b>
<input type="text" name="First_name" title="Enter the firstname;" placeholder="Enter The Firstname"/></td>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;><b><label for="name">Middle Name:</label></b>
<input type="text" title="Enter the Middlename;" name="Middle_name" placeholder="Enter The Middlename"/><br><br> 
<b><label for="name">Father Name:</label></b>
<input type="text" title="Enter the Fathers name;" name="Fathers_name" placeholder="Enter The Father's name"/>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="date">Date Of Birth:<label></b>
<input type="Date" placeholder="dd-mm-yy" name="DOB">&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="gender">Gender:</label></b>
<select id="Gender" name="gender">
<option value="Female"> Female</option>
<option value="Male"> Male</option>
<option value="Others" >Others</option>
</select><br><br>
<b><label for="email">Email Id:</label></b>
<input type="email" title="Enter the Email_id" placeholder="xyz@gmail.com" name="Email_id" required>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="email"> Alternate Email Id:</label></b>
<input type="email" title="Enter the Email_id" placeholder="xyz@gmail.com" name="Alternateemailid" required><br><br>
<b><label for="Phone no">Phone no:</label><b>
<input type="tel"  name="Phone" placeholder="91-xxxxxxxxxx" pattern="[0-9]{2}-[1-9]{10}" title="enter the phone number">&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<b><label for="Phone no"> Alternate Phone no:</label><b>

<input type="tel"  name="Alternate_phone" placeholder="91-xxxxxxxxxx" pattern="[0-9]{2}-[1-9]{10}" title="enter the phone number"><br><br>
<b><label for="address">Address:</label>
<textarea name="Address" rows="5" cols="30">
</textarea>&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<label for="pincode">Pincode:</label>
<input type="number" placeholder="xxxxxx" pattern="(0-9){6}" name="Pincode"><br><br>
<label for="Password">Password:</label>
<input type="password" name="pass">&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;&#x00A0;
<label for="CPassword"> Conform Password:</label>
<input type="password" name="cpass"><br><br>

<input type="Submit" value="Submit" required>
<input type="Reset" value="Reset" required>

</fieldset>
</table>
</form>
</div>
</body>
</html>
