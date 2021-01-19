<<?php 
$con=mysqli_connect("localhost","root","india@123","student") ;
if (mysqli_connect_errno()) {
	# code...
	die("Connection Failed" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Creating Database Tables Using PHP</title>
</head>
<body>
<?php 
$sql ="Create Table sports ";
$sql.="( id int primary key auto_increment, ";
$sql.="name varchar(30), ";
$sql.="strength int )";
$res=mysqli_query($con,$sql);
if (!$res) {
	# code...
	die("Querying Failed");
}
else{
	echo "Table creted successfully!";
}
?>
</body>
</html>
<?php 
mysqli_close($con);
?>