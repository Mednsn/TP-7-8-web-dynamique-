<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: phpDDD.php");
}
?>
</body>
</html>