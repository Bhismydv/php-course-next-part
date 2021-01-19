<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","india@123","student");
if (mysqli_connect_errno()) {
	# code...
	die("Connection Failed" . mysqli_connect_error());
}
?>
<html>
<head>
	<title>Querying the Database</title>
</head>
<body>
<?php 
$sql="Select * from student_info";
$res=mysqli_query($con,$sql);
if (!$res) {
	# code...
	die("Query Failed");
}
while ($row=mysqli_fetch_assoc($res)) {
	# code...
	foreach ($row as $key => $value) {
		# code...
		echo "{$key}:" . "{$value}<br />";
	}
	echo "<br /><hr /><br />";
}
mysqli_free_result($res);
?>
</body>
</html>