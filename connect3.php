<?php
$conn=mysqli_connect("localhost","root","","Cshare") or die("Error : ".mysql_error());
session_start();
$f_name = $_SESSION['sessionVar'];
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
|| ($_FILES["file"]["type"] == "video/mp4"))
&& ($_FILES["file"]["size"] < 6059649)
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
else
  {
  echo "Invalid file";
  }
?>