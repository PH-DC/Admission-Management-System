<?php
$username_p = $_POST['username'];
$password_p = $_POST['password'];

$servername="localhost";
$username="root";
$password="";
$dbname="admission_system";

$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['Login']))
{
	if (!$conn) 
	{
		die('Could not connect'.mysqli_connect_error());
	}
	$sql = "SELECT * FROM admission WHERE Susername='$username_p' AND Spassword='$password_p'";
	$retval = mysqli_query($conn,$sql);

	if($row = mysqli_fetch_array($retval))
	{
		echo "Login successfull";
	}
	else
	{
		echo "Username or Password is incorrect";
		echo "Error!".$conn->error;
	}
	$conn -> close();
}
?>