<?php

$get_Sadmission = $_POST['Ayear'];
$get_Sname = $_POST['name'];
$get_Sdob = $_POST['dob'];
$get_Sadd = $_POST['address'];
$get_Sphone = $_POST['pnumber'];
$get_Smobile = $_POST['pcnumber'];
$get_Smail = $_POST['email'];
$get_Senrollid = $_POST['enrollment'];

foreach ($_POST['branch'] as $finalBranch) {
}
$get_Sbranch = $finalBranch;

foreach ($_POST['isScholarCandidate'] as $finalScholar) {
}
$get_Sscholar = $finalScholar;

foreach ($_POST['feespaid'] as $finalFeestat) {
}
$get_Sfeestat = $finalFeestat;

foreach ($_POST['enrollstat'] as $finalEnrollstat) {
}
$get_Senrollstat = $finalEnrollstat;

foreach ($_POST['docs'] as $final_SDocsstat) {	
}
$get_SDocsstat = $final_SDocsstat;

foreach($_POST['a'] as $x)
{
	echo "<br>Selected option is: ".$x;
}

$servername="localhost";
$username="root";
$password="";
$dbname="student_data"; 

$conn=new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['AddStudent'])) {
	if (!$conn) {
		die('Could not connect'.mysqli_connect_error());
	}
	
    $sql = "INSERT INTO data (Sadmission,Sname,Sdob,Sadd,Sphone,Smobile,Smail,Senrollid,Sbranch,Sscholar,Sfeestat,Senrollstat,Sdocumentstat) 	VALUES	 ('$get_Sadmission', '$get_Sname', '$get_Sdob', '$get_Sadd', '$get_Sphone', '$get_Smobile', '$get_Smail', '$get_Senrollid', '$get_Sbranch', '$get_Sscholar', '$get_Sfeestat', '$get_Senrollstat', '$get_SDocsstat')";

	if($conn->query($sql) == TRUE) {
		echo "<script>";
		echo "alert('Student added successfully!');";
		echo "</script>";
	} else {
        include 'dashboard.html';
    }
	$conn -> close();
}
?>