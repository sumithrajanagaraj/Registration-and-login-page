<?php
require "connection.php"
?>
<html>
<head>
<style>
a{font-size:30px;text-decoration:none; color:black;}
.table{border:3px solid black;}
p{font-size:30;color:red; background-color:pink;}
.regi{text-align:center; font-size:30;color:white;}
</style>
</head>
<body>
<p class="table">
<?php
if(isset($_POST['First_name'])&&isset($_POST['Middle_name'])&&isset($_POST['Middle_name'])&&isset($_POST['DOB'])&&isset($_POST['gender'])&&isset($_POST['Email_id'])&&isset($_POST['Alternateemailid'])&&isset($_POST['Phone'])&&isset($_POST['Alternate_phone'])&&isset($_POST['Address'])&&isset($_POST['Pincode'])&&isset($_POST['pass'])&&isset($_POST['cpass']))
$password=md5($_POST['pass']);
$cpassword=md5($_POST['cpass']);
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
<?php
if(isset($_POST['First_name'])&&isset($_POST['Middle_name'])&&isset($_POST['Middle_name'])&&isset($_POST['DOB'])&&isset($_POST['gender'])&&isset($_POST['Email_id'])&&isset($_POST['Alternateemailid'])&&isset($_POST['Phone'])&&isset($_POST['Alternate_phone'])&&isset($_POST['Address'])&&isset($_POST['Pincode'])&&isset($_POST['pass'])&&isset($_POST['cpass']))
$sql="INSERT INTO register_info(Name,Fathers_name,Date_of_birth,Gender,Email_id,Alternate_email_id,Phone_no,Alternate_phone_no,Address,Pincode,Password,Conform_password) VALUES ('$fname','$mname','$dob','$gen','$email','$aemail','$ph','$aph','$add','$pin','$password','$cpassword')";
$result=$conn->query($sql);

if($result)
{	
	echo '<p class="regi"><b>Register successful!!</b></p>';

}
else
{
	echo "there is an error!!";
}	
?>
</p><br><br>
<p style="text-align:center;">
<a href="login.php"><b>Login To Continue<b></a>
</p>
</body>
</html>