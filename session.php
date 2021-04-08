<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "safal";
$_SESSION["email"] = "safal123@gmail.com";
echo $_SESSION["name"];
?>
</body>
</html>