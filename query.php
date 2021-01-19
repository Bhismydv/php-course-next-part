<?php 
$host="localhost";
$dbuser="root";
$pass="india@123";
$dbname="student";
$con=mysqli_connect($host,$dbuser,$pass,$dbname);
if (mysqli_connect_errno()) {
	# code...
	die("Connection Failed! " .mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Querying the Database</title>
</head>
<body>
<?php
$sql="Select * from student_info";
$res=mysqli_query($con, $sql);
if (!$res) {
	# code...
	die("Query Failed! ");
}
while ($row=mysqli_fetch_row($res)) {
	# code...
	var_dump($row);
	echo "<br /><hr /><br />";
}
mysqli_free_result($res);
?>
</body>
</html>
<?php 
mysqli_close($con);
?>