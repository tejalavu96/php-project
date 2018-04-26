<?php

echo "It Works";

if(isset($_POST['name'])){
$dbhost = 'localhost';
$dbuser = 'jeevan';
$dbpass = 'iiit123';

$name = $_POST['name'];
$emailid = $_POST['emailid'];
$password = $_POST['password'];
$ipaddress = $_SERVER['REMOTE_ADDR'];

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
	die('Could not connect: ' . mysql_error());
}
else{
	echo "Success";
	$password = md5($password);
	$sql = "INSERT INTO users ".
		"(id, name, emailid, password, ipaddress) ".
		"VALUES ". "('0','$name', '$emailid', '$password', '$ipaddress')";
	
	// For selecting the database
	mysql_select_db('qwerty');

	$getval = mysql_query( $sql, $conn );
	if(! $getval )
	{
		die('Could not enter data: ' . mysql_error()); 
	}
	echo "<h2 style=" . "color:white;>" . "Entered data successfully\n";
	mysql_close($conn);
}
}
?>

<html>
	<head>
		<title>
			Welcome !
		</title>
		<style>
		body{background-color : black}
		</style>
	</head>

	<body>
		<h2 style="color:white;">Sign up Here </h2>
		<form action="insert.php" method="POST">
			<input type="text" name="name">
			<br/>
			
			<br/>
			<input type="text" name="emailid">
			<br/>
			<br/>
			<input type="password" name ="password">
			</br>
			<br/>
			<button type="submit"><h2 style="color:red;">Submit</h2></button>
		</form>

	</body>

	<footer>
	</footer>
</html>
