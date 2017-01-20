<?php
if(isset($_POST['email'])){ $email = $_POST['email']; }else{$email="";}
if(isset($_POST['name'])){ $name = $_POST['name']; }else{$name="";}
$conn = new mysqli("localhost","root","","cshare");

$query= $conn->prepare("Select Password from user_data where email='($email)' and f_name='($name)';");
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();

print_r($row['Password']);
echo $row['Password'];

//echo "Ajay Thorve.";
?>