<html>
<head>
<title>Source Page</title>
</head>
<body>
<?php 
$name="John";
$age=22;
$email="bhism@gmail.com";
$str="name={$name} & age={$age} & email={$email}";
?>
<a href="destination.php?<?php echo $str; ?>">Destination</a>
</body>
</html>