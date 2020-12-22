<html>
<head>
<title>HTML Encoding (Part-1)</title>
</head>
<body>
<a href="http://www.google.com">
<?php 
$str="<click here>";
echo htmlspecialchars($str); ?></a>
</body>
</html>