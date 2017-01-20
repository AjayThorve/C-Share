<?php
if(isset($_POST['fname'])){ $fname = $_POST['fname']; }else{$fname="";}
if(isset($_POST['lname'])){ $lname = $_POST['lname']; }else{$lname="";}
if(isset($_POST['email'])){ $email = $_POST['email']; }else{$email="";}
if(isset($_POST['password1'])){ $pass1 = $_POST['password1']; }else{$pass1="";}
if(isset($_POST['password2'])){ $pass2 = $_POST['password2']; }else{$pass2="";}
if(isset($_POST['gender'])){ $gender = $_POST['gender']; }else{$gender="";}

$conn=mysqli_connect("localhost","root","","Cshare") or die("Error : ".mysql_error());

if($pass1==$pass2)
{
$query="INSERT INTO USER_DATA (f_name,l_name,password,email,date,gender)" . "VALUES('($fname)','($lname)','$pass1','($email)','$_POST[date]','($gender)');";
$result=mysqli_query($conn,$query);
}
else
{
echo "Password is not matching.... ";
}

?>
<html>
<head>
</head>
<body>
Successfully signed up! now please <a href="startpage.php">login</a>
</body>
</html>