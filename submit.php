<html>
<head>
<style>
a{font-size:30px;text-decoration:none; color:black;}
.table{border:3px solid black;}
p{font-size:30;color:red; background-color:pink;}
</style>
</head>
<body>
<p class="table">
<?php
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
if($password==$cpassword){
echo '<p>PROFILE</p>';
$fname=$_POST['First_name'];
echo  'Name:'.$fname;
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
$mname=$_POST['Middle_name'];
echo 'Fathers Name:'.$mname."<br><br>";
$dob=$_POST['DOB'];
echo 'Date of Birth:'.$dob;
$gen=$_POST['gender'];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo 'Gender:'.$gen."<br><br>";
$email=$_POST['Email_id'];
echo 'Email Id:'.$email;
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$aemail=$_POST['Alternateemailid'];
echo 'Alternate_Email Id:'.$aemail.'<br><br>';
$ph=$_POST['Phone'];
echo 'Phone No:'.$ph;
$aph=$_POST['Alternate_phone'];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo ' Alternate Phone No:'.$aph."<br><br>";
$add=$_POST['Address'];
echo 'Address:'.$add;
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$pin=$_POST['Pincode'];
echo 'Pincode:'.$pin."<br><br>";
}
?>
</p><br><br>
<p style="text-align:center;">
<a href="login.php">Login To Continue</a>
</p>
</body>
<html>


