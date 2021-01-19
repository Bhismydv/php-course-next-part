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
	<title>Updating Data in Tables</title>
</head>
<body>
<?php 
$sql="Update student_info ".
"Set name='Jay' " .
"Where id =1 ";
$res=mysqli_query($con,$sql);
if (!$res) {
	# code...
	die("Query Failed" . mysqli_connect_error($con));
}
else{
	echo "Data Updated Successfully";
}
?>
</body>
</html>
<?php
mysqli_close($con);
  ?>