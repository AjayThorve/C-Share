<?php
if(isset($_POST['Username'])){ $Username = $_POST['Username']; }else{$Username="";}
if(isset($_POST['Password'])){ $Password = $_POST['Password']; }else{$Password="";}
$conn = new mysqli("localhost","root","","cshare");

$query= $conn->prepare("Select id from user_data where email='($Username)' and password='$Password';");
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();

$query1= $conn->prepare("Select f_name from user_data where email='($Username)' and password='$Password';");
$query1->execute();
$result1 = $query1->get_result();
$row = $result1->fetch_assoc();

print_r($row['f_name']);
echo $row['f_name'];
/*
$row=mysqli_fetch_row($result);
$id = $row['id'];
echo $id;
$query2="Select f_name from user_data where email='($Username)' and password='($Password)';";
$result2=mysqli_query($conn,$query2);
$row=mysqli_fetch_row($result2);
$name = $row['f_name'];
echo $name;
*/

if(mysqli_num_rows($result))
{
    session_start();
	$x = $row['f_name'];;
    $_SESSION['sessionVar'] = $x;
    echo "$x";
$session['session_var'] = $result2;
header( 'Location: Homepage.php' ) ;
}
else
{
header("Location: Home1.html");
}

?>