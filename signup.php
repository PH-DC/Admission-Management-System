<?php

$name_p = $_POST['name'];
$email_p = $_POST['email'];

$username_p = $_POST['username'];
$password_p = $_POST['password'];

$servername="localhost";
$username="root";
$password="";
$dbname="admission_system";

$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['Signup']))
{
	if (!$conn) 
	{
		die('Could not connect'.mysqli_connect_error());
	}
	$sql = "INSERT INTO admission(Sname,Semail,Susername,Spassword) VALUES ('$name_p','$email_p','$username_p','$password_p')";

	if($conn->query($sql) == TRUE)
	{
		echo "<script>";
		echo "alert ('Your account was created successfully. Please login to continue.')";
		echo "</script>";
		include 'login.html';
	}
	else
	{
		include 'login.html';
	}
	$conn -> close();
}
?>