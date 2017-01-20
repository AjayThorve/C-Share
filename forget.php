<?php
$conn = new mysqli("localhost","root","","cshare");
session_start();
if (isset($_SESSION['sessionVar'])) 
{
header('Location:Homepage.php');
exit;
}
?>
<!DOCTYPE html>
<head>
<script src="jquery-1.10.2.js">
</script>
<script>
$(document).ready(function(){
	$(".password2").hide();
	$(".bbb").click(function(){
	$(".password1").hide();
	$(".password2").fadeIn(1000);
	});	
});	
</script>
<title></title>
<style>

#talkbubble {
   width: 120px;
   height: 80px;
   background: red;
   position: relative;
   -moz-border-radius:    10px;
   -webkit-border-radius: 10px;
   border-radius:         10px;
}
#talkbubble:before {
   content:"";
   position: absolute;
   right: 100%;
   top: 26px;
   width: 0;
   height: 0;
   border-top: 13px solid transparent;
   border-right: 26px solid red;
   border-bottom: 13px solid transparent;
}




fieldset {
    position:relative;
    padding-top:50px;
	margin-top:50px;
	height : 300px;
	width : 800px;
	margin-left:200px;
	background-color:#99BF00;
	border: 1px solid green;
}

legend {
    position:absolute;
    top:20px;
    left:18px;
}

.passset
{
color: #1c2a47;
font-size : 30px;
font-color : #1c2a47;
}

.table1
{
margin-left:200px;
margin-top:50px;
}

.tp {

}
</style>
<Head>
<Title>Cshare.com : Share,host,download,upload!!</Title>
<link rel="stylesheet" type="text/css" href="css files/css1.css">
<link href="image files/logo1.png" rel="shortcut icon">
</head>
<Body bgcolor="#CCCC00">
<Form action="connect2.php" Method="POST" id="a111">
<Table border="0" class="table" bgcolor="#99BF00">
<tr>
<td colspan="4" rowspan="3" align="CENTER"><PRE><font><img height="90" src="IMAGE FILES\logo1.pNg" id="loading"><img height="90" src="IMAGE FILES\sharelogo.pNg"></font></PRE></td>
<td><pre>									<pre></td>
<td><b>Email</b><td>
<td><b>Password</b></td>
<td><pre>									<pre></td>
</tr>
<tr>
<td><pre>									<pre></td>
<td><input  type="text" name="Username" required></td>
<td></td>
<td><input  type="password" name="Password" required></td>
<td><button type="submit" form="a111" class="myButton" value="Login">Login</button></td>
</tr>
<tr>
<td><pre>									<pre></td>
<td><input type="checkbox" name="c1">Keep me logged in</td>
<td></td>
<td><a href="forget.php">Forgot password?</td>
</tr>
</table>
</form>
<fieldset>
<legend class="passset">Find Your Password </legend>
<hr STYLE="font-color : black ;">
<div class="password2"> 
<h2 align="center" style="margin-top:100px">
<?php
if(isset($_POST['email'])){ $email = $_POST['email']; }else{$email="";}
if(isset($_POST['name'])){ $name = $_POST['name']; }else{$name="";}
$conn = new mysqli("localhost","root","","cshare");

$query= $conn->prepare("Select Password from user_data where email='($email)' and f_name='($name)';");
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();
$count=mysqli_num_rows($result);
		
		if ($count > 0){
echo 'Your password is :';
print_r($row['Password']);
}
		else{
		echo 'You dont hav an account, Signup today for free!';
		}
?>
</h2>
<form action="startpage.php">
<input type="submit" value="Go to login page" style="margin-top:110px; margin-left:630px; " />
</form>
</div>
<div class="password1">
<form action="forget.php" method="Post">
<table class = "table1" cellspacing="20px" >
<tr colspan=2 ></tr>
<tr>
	<td><img src="image files/passmessage.gif" ></td>
	<td class = "tp"><input type="email" placeholder="Enter your Email" name="email" size="30" required></td>
</tr>
<tr>
	<td><img src="image files/idendity_image.jpg" width=30 height=25 ></td>
	<td class = "tp"><input type="text" placeholder="Enter your Name" name="name" size="30" required></td>
</tr>
</table>
<br><br>
<hr>
<pre>                                                                               <input type="submit" align="left" class="bbb" name="getpass" value="Give Me Password"/></pre>
</fieldset>
</form>
</div>
<div class="qqq2">

<pre>                                                                                   <a href="Startpage.php">Home|</a><a href="contact.php">Contact us|</a>
</div>

</body>
</html>