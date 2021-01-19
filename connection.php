<?php 
$host="localhost";
$dbuser="root";
$pass="india@123";
$dbname="student";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if (mysqli_connect_error()) {
	# code...
	die("Connection Failed! ".mysql_connect_error());
}
else{
	echo "Connected to database {$dbname}";
}
?>

<html>
<head>
	<title>Database Connection</title>
</head>
<body>

</body>
</html>
<?php 
mysqli_close($conn);
?>
