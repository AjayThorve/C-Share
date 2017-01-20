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
</head>
<Style>
.a23
{
border-style:solid;
border-radius:10px;
border-color:black;
margin-top:100px;
width:30%;
margin-left:150px;
}
.a234
{
margin-left:20px;
}
#sliderFrame 
{
   width:70%;
   float:right;
    
}
#slider, #slider div.sliderInner {
    width:60%;height:390px;/* Must be the same size as the slider images */
    border-radius: 8px;
}
</Style>
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
<h1 style="margin-left:200px;color:BLUE;"><i>Submit  your thoughts to us!</i></h1>
<div class="a23">

<div class="a234">

<form method="post" action="update_guestbook.php">
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" size=30 maxlength="30" placeholder="Enter your name" name="name"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" size="20" placeholder="Enter your emailid" maxlength=20 name="email"></td>
	</tr>
	<tr>
		<td>Greetings</td>
		<td><textarea name="greetings" cols="30" placeholder="Feel free to comment" rows="6" ></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" form="a111" class="myButton" value="Login">Submit greetings</button></td>
	</tr>
</table>
</form>
</div>
</div>

<div id="sliderFrame" style="float:right; float:top;">
        <div id="slider">
<img src="Images/img1.jpg" width="700" height="390" />
		<img src="Images/img2.jpg" width="200" height="200" alt="Share music on the go!" />
		<img src="Images/img3.jpg" width="150" height="200" style="background:no repeat;" alt="Access from anywhere!" />
		   <a class="video" href="http://www.youtube.com/watch?v=InCUx_Z3AYo">
                <b data-src="images/img4.jpg" description="share videos with your friends!">Image Slider</b>
            </a>
        <a href="#" class="qqq1"><img src="Images/img3.jpg" width="150" height="200" alt="Click to join" /></a>
</div>
</div>

<div class="qqq2">

<pre>                                                                                   <a href="Startpage.php">Home|</a><a href="contact.php">Contact us|</a>
</div>
</body>
</html>