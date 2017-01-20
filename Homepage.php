<?php
$conn = new mysqli("localhost","root","","cshare");
session_start();
if (!isset($_SESSION['sessionVar'])) 
{
header('Location: startpage.php');
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cshare.com</title>
<link href="image files/logo1.png" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="css files/table.css">
<link rel="stylesheet" type="text/css" href="css files/css2.css">
</head>
<script src="jquery-1.10.2.js">
</script>
<script>
$(document).ready(function() {
	$("#abcd1").hide(); /*abcd2 is the table displaying my uploads while abcd1 is the table displaying all uploads by all users*/
	$("#abcd3").hide();
	$("#abcd4").hide();
	$("#abcd5").hide();
	$("#abcd2").show();
	$("#bb").click(function(){
	$("#abcd2").hide();
	$("#abcd3").hide();
	$("#abcd4").hide();
	$("#abcd5").hide();
	$("#abcd1").fadeIn(500);
	});
	$("#bb1").click(function(){
	$("#abcd1").hide();
	$("#abcd3").hide();
	$("#abcd4").hide();
	$("#abcd5").hide();
	$("#abcd2").fadeIn(500);
	});
	$("#bb2").click(function(){
	$("#abcd2").hide();
	$("#abcd1").hide();
	$("#abcd4").hide();
	$("#abcd5").hide();
	$("#abcd3").fadeIn(500);
	});
	$("#bb3").click(function(){
	$("#abcd2").hide();
	$("#abcd3").hide();
	$("#abcd1").hide();
	$("#abcd5").hide();
	$("#abcd4").fadeIn(500);
	});
	$("#bb4").click(function(){
	$("#abcd2").hide();
	$("#abcd3").hide();
	$("#abcd4").hide();
	$("#abcd1").hide();
	$("#abcd5").fadeIn(500);
	});
	$("#bb5").click(function(){
	$("#abcd2").hide();
	$("#abcd3").hide();
	$("#abcd4").hide();
	$("#abcd5").hide();
	$("#abcd1").hide();
	});

});
</script>
<style>
</style>
<body  bgcolor="#CCCC00" background="Image Files/logo.jpg">
<a href="homepage.php"><img height="90" width="45" src="IMAGE FILES\logo1.pNg" id="loading1"><img height="90" id="loading2"src="IMAGE FILES\sharelogo.pNg"></a><br>
<div class=image>
<ul class="menu">
<li><a class="aa" href="#" id="bb2">Uploaded DOCS</a></li>
<li><a class="aa" href="#" id="bb3">Uploaded MEDIA</a></li>
<li><a class="aa" href="#" id="bb4">Uploaded IMAGES</a></li>
<li><?php
error_reporting(E_ERROR | E_PARSE);
$f_name = $_SESSION['sessionVar'];
$name = substr("$f_name", 1, -1);
echo "<a class='aa' href='#' style='background-color:#99BF00;' >Hey $name!</a>";
?></li>
<li><a class="aa" href="#" style="background-color:#99BF00;"></a></li>
<li><a class="aa" href="#" style="background-color:#99BF00;"></a></li>
<li><a class="aa" href="#" style="background-color:#99BF00;"></a></li>
<li><a class="aa" href="#" style="background-color:#99BF00;"></a></li>
<form action="logout.php" method="post">
<li><a class="aa" href="startpage.php" style="background-color:#99BF00;" id="bb4"><button value="Logout" class="myButton" type="submit">Logout</button></a></li>
</ul>
</div>
</form>


<div class="rectangle2">
<div style="margin-left:500px;">
<form action="Homepage.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<Button type="submit" name="submit" id="abcd" class="myButton">Upload</button>
</form>
</div>
</div>
<marquee style="font-family:Bernard MT,Helvetica, sans-serif;font-size:20px;color:red;">To download, right click on <i>download/preview</i> and select save link as !</marquee>
<div id="rectangle">
<div id="rectangle1">
<ul class="menu">
<li><a class="aa"  id="bb" href="#">All Uploads</a></li>
<li><a class="aa" id="bb1" href="#">My uploads</a></li>
<li><a class="aa" href="#" style="background-color:#99BF00;"></a></li>
<li><a class="aa" href="#" style="background-color:#99BF00;"></a></li>
<li><a class="aa" href="#" id="bb5" style="background-color:#99BF00;">Clear Screen</a></li>

<li><a class="aa" href="Homepage.php"><i>Refresh</i></a></li>
</ul>
</div>





<div class="rectangle3" id="abcd1">
<?php
$conn=mysqli_connect("localhost","root","","cshare");
$query = "SELECT file_name,file_type,username,date,size from files;";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
echo "<div style='size:100px;text-decoration:none;margin-top:20px;zoom:200%'><i>Uploaded by All Users</i></div>";
echo "<table id='wrapper' border='1'>
<tr>
<th>File name</th>
<th>Type</th>
<th>Uploaded by</th>
<th>date</th>
<th>file size(KB)</th>
<th>Download file</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['file_name']."</td>";
	echo "<td>".$row['file_type']."</td>";
	echo "<td>".substr($row['username'],1,-1)."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".($row['size']/1024)." KB</td>";
	echo "<td><a href='upload/".$row['file_name']."'>Download/Preview</a>";
	echo "</tr>";
}
echo "</table>";

?>
</div>




<div class="rectangle3" id="abcd2">
<?php
$conn=mysqli_connect("localhost","root","","cshare");
$query = "SELECT file_name,file_type,username,date,size from files where username='$f_name';";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
echo "<div style='size:100px;text-decoration:none;margin-top:20px;zoom:200%'><i>Uploaded by $name</i></div>";
echo "<table id='wrapper' border='1'>
<tr>
<th>File name</th>
<th>Type</th>
<th>Uploaded by</th>
<th>date</th>
<th>file size(KB)</th>
<th>Download file</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['file_name']."</td>";
	echo "<td>".$row['file_type']."</td>";
	echo "<td>".substr($row['username'],1,-1)."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".($row['size']/1024)." KB</td>";
	echo "<td><a href='upload/".$row['file_name']."'>Download/Preview</a>";
	echo "</tr>";
}
echo "</table>";

?>
</div>


<div class="rectangle3" id="abcd3">
<?php
$conn=mysqli_connect("localhost","root","","cshare");
$query = "SELECT file_name,file_type,username,date,size from files where file_type='application/pdf' or file_type='application/msword';";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
echo "<div style='size:100px;text-decoration:none;margin-top:20px;zoom:200%'><i>Uploaded Docs</i></div>";
echo "<table id='wrapper' border='1'>
<tr>
<th>File name</th>
<th>Type</th>
<th>Uploaded by</th>
<th>date</th>
<th>file size(KB)</th>
<th>Download file</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['file_name']."</td>";
	echo "<td>".$row['file_type']."</td>";
	echo "<td>".substr($row['username'],1,-1)."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".($row['size']/1024)." KB</td>";
	echo "<td><a href='upload/".$row['file_name']."'>Download/Preview</a>";
	echo "</tr>";
}
echo "</table>";

?>
</div>




<div class="rectangle3" id="abcd4">
<?php
$conn=mysqli_connect("localhost","root","","cshare");
$query = "SELECT file_name,file_type,username,date,size from files where file_type='audio/mp3' or file_type='video/mp4';";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
echo "<div style='size:100px;text-decoration:none;margin-top:20px;zoom:200%'><i>Videos and Songs</i></div>";
echo "<table id='wrapper' border='1'>
<tr>
<th>File name</th>
<th>Type</th>
<th>Uploaded by</th>
<th>date</th>
<th>file size(KB)</th>
<th>Download file</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['file_name']."</td>";
	echo "<td>".$row['file_type']."</td>";
	echo "<td>".substr($row['username'],1,-1)."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".($row['size']/1024)." KB</td>";
	echo "<td><a href='upload/".$row['file_name']."'>Download/Preview</a>";
	echo "</tr>";
}
echo "</table>";

?>
</div>





<div class="rectangle3" id="abcd5">
<?php
$conn=mysqli_connect("localhost","root","","cshare");
$query = "SELECT file_name,file_type,username,date,size from files where file_type='image/gif' or file_type='image/jpeg' or file_type='image/jpg' or file_type='image/pjpeg' or file_type='image/png' or file_type='image/x-png' ;";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
echo "<div style='size:100px;text-decoration:none;margin-top:20px;zoom:200%'><i>Uploaded Pictures</i></div>";
echo "<table id='wrapper' border='1'>
<tr>
<th>File name</th>
<th>Type</th>
<th>Uploaded by</th>
<th>date</th>
<th>file size(KB)</th>
<th>Download file</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['file_name']."</td>";
	echo "<td>".$row['file_type']."</td>";
	echo "<td>".substr($row['username'],1,-1)."</td>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".($row['size']/1024)." KB</td>";
	echo "<td><a href='upload/".$row['file_name']."'>Download/Preview</a>";
	echo "</tr>";
}
echo "</table>";

?>
</div>





</div>


</body>
</html>

<?php
error_reporting(E_ERROR | E_PARSE);
$conn=mysqli_connect("localhost","root","","Cshare") or die("Error : ".mysql_error());
$allowedExts = array("gif", "jpeg", "jpg", "png","mp4","mp3","pdf","doc","docx","txt","rtf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "application/pdf") 
|| ($_FILES["file"]["type"] == "application/rtf") 
|| ($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "audio/mp3"))
&& ($_FILES["file"]["size"] < 6400000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	$file_name=$_FILES["file"]["name"];
	$file_type=$_FILES["file"]["type"];
	$size=$_FILES["file"]["size"];
	echo $file_name."<br>";
	echo $file_type."<br>";
	echo $size."<br>";
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $query="INSERT INTO files(file_name,file_type,size,date,username)"."VALUES('$file_name','$file_type','$size',now(),'$f_name');";
	  $result=mysqli_query($conn,$query);
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	 
      }
    }
  }
/*
else
  {
  echo "Invalid file";
  }
*/
?>
