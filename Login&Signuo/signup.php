<?php  
 header('location:signlog.html');
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "mobile_shop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];



$sql = "INSERT INTO signup (name, email, password) 
VALUES ('$name', '$email', '$password')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
		
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>




















