<?php
$name = $_GET['stuff'];
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
Hello</title>
</head>
<body>
<?php
ini_set ('display errors', 1);
error_reporting (E_ALL |E_STRICT);
echo "<h1 title=\"Hello, $name\" style=\"text-align:center;\">Hello, <span style=\"font-weight:bold;\">$name</span>!</h3>";
?>
</body>
</html>
