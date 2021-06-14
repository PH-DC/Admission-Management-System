<?php

$get_Senrollid = $_POST['enrollment'];

$servername="localhost";
$username="root";
$password="";
$dbname="student_data";

$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['DeleteStudent'])) {
	if (!$conn) {
		die('Could not connect'.mysqli_connect_error());
	}
	
    $sql = "DELETE FROM data WHERE Senrollid = $get_Senrollid";

	if($conn->query($sql) == TRUE) {
		echo "<script>";
		echo "alert('Student removed successfully.');";
		echo "</script>";
	} else {
        include 'dashboard.html';
    }
	$conn -> close();
}
?>