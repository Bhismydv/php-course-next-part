<?php 
$con=mysqli_connect("localhost","root","india@123","student");
if (mysqli_connect_errno()) {
	# code...
	die("Connection Failed" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserting Data in Tables</title>
</head>
<body>
<?php 
$sql ="Insert into student_info ";
$sql.="(id,name,gender,email,dob) ";
$sql.="Values(2,'Vicky','M','vicky@gmail.com','1999/12/29') ";
$res=mysqli_query($con,$sql);
if (!$res) {
	# code...
	die("Query Failed " . mysqli_error($con));
}
else{
	echo "Data inserted Successfully";
}
?>
</body>
</html>
<<?php 
mysqli_close($con);
 ?>