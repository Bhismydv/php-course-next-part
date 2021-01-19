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
 	<title>Deleting Data in php tables</title>
 </head>
 <body>
 <?php 
$sql="Delete From student_info " .
"Where id=1";
$res=mysqli_query($con,$sql);
if (!$res) {
	# code...
	die("Query Failed" . mysqli_error($con));
}
else {
	echo "Deleted";
}
  ?>
 </body>
 </html>
 <?php 
mysqli_close($con);
  ?>