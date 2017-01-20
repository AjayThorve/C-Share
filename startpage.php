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
<Head>
<style>
#sliderFrame 
{
    position:relative;
    width:650px;
    float:left;
    margin-top:50px ; /*center-aligned*/
}
  
#slider, #slider div.sliderInner {
    width:60%;height:390px;/* Must be the same size as the slider images */
    border-radius: 8px;
}
</style>
<Title>Cshare.com : Share,host,download,upload!!</Title>
<link rel="stylesheet" type="text/css" href="css files/css1.css">
<link href="image files/logo1.png" rel="shortcut icon">
<link href="themes/6/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/6/mcVideoPlugin.js" type="text/javascript"></script>
    <script src="themes/6/js-image-slider.js" type="text/javascript"></script>
    <link href="themes/6/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/6/tooltip.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:70px;height:44px;' />"; });
    </script>
<script src="jquery.cycle.all.js"></script>
<script>
$(document).ready(function() {
    $('.slideshow').cycle({
		fx:     'shuffle', 
    easing: 'easeOutBack', 
    delay:  3000  
	});
});
</script>
<script src="jquery-1.10.2.js">
</script>
<script>
 $(document).ready(function(){
	$(".signup").hide();
    $(".aabd").hover(function(){
		
        $(".signup").slideDown(1000);
		}); 
	$(".bbb").click(function(){
	$(".signup").fadeOut(1000);
	});	
	$(".my button").click(function(){
	fadeto("slow",0.15);
	});
	$(".qqq1").click(function(){
		
        $(".signup").slideDown(1000);
		}); 
});	

</script>
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
<div class="qqq4">Cshare lets you upload and download unlimited amount of data</div>
<div class="aab">
<p align="CENTER"><a href="#" class="bbb1" >Dont Have an Account? </a><a href="#" class="aabd">Sign Up</a></p>
</div>
<div id="sliderFrame">
        <div id="slider">
<img src="Images/img1.jpg" width="700" height="390" />
		<img src="Images/img2.jpg" width="200" height="200" alt="Share music on the go!" />
		<img src="Images/img3.jpg" width="150" height="200" style="background:no repeat;" alt="Access from anywhere!" />
		   <a class="video" href="http://www.youtube.com/watch?v=InCUx_Z3AYo">
                <b data-src="images/img4.jpg" description="share videos with your friends!">Image Slider</b>
            </a>
        <a href="#" class="qqq1"><img src="Images/img3.jpg" width="150" height="200" alt="Click to join" /></a>
</div>
<div class="qqq2">

<pre>                                                                                   <a href="Startpage.php">Home|</a><a href="contact.php">Contact us|</a>
</div>
</div>
<div class="signup">
<h1><p>Sign Up Here&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" class="bbb">close</a></p></h1>
<Form action="connect1.php" id="a222" method="POST">
<table border=0>
<tr>
<td>
<p style="color:black;">First Name:</p> </td><td><input type="text" class=ii placeholder="Enter your name" name="fname" size="30" required></td>
</tr>
<tr>
<td>
<p style="color:black;">Last Name:</p> </td><td><input type="text" class=ii name="lname" placeholder="Enter your surname" size="30" required></td>
</tr>
<tr>
<td>
<p style="color:black;">Email:</p></td><td><input type="email" class=ii placeholder="something@xyz.com" name="email" size="30" required></td>
</tr>
<tr>
<td>
<p style="color:black;">Create a Password:</p></td><td> <input type="password" id="val" placeholder="6 or more characters" id="tt" name="password1" class="ii" size="30"></td>
</tr>
<tr>
<td>
<p style="color:black;">Confirm Your Password:</p></td><td><input type="password" name="password2" class=ii id="tt1" size="30" required></td>
</tr>
<tr>
<td><p style="color:black;">Gender:</p></td><td><p style="color:white;"><input type="radio" name="gender" value="male"><tab>Male<input type="radio" name="gender" value="female">Female</p>
</td>
</tr>
<tr>
<td>
<p style="color:black;">Date of Birth :</p></td><td>			<input type="date" required name="date" ></td>
</tr>
<tr>
<td></td>
<td>
<button type="submit" form="a222" class="myButton" value="Login">Create Account</button>
</td>
</tr>
</table>
</form>
</div>
 

</body>
</html>