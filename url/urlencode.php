<html>
<head>
<title>URLENCODE</title>
</head>
<body>
<?php 
$hobbies="Reading & Playing Guitar"; ?>
<a href="url_destination.php?hobbies=<?php echo urlencode($hobbies) ; ?>">
Destination</body>
</html>