<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "mobile_shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];



$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
		 
	</script>
	
	<?php
	header('location:../index.php');
}
else{
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}








?>