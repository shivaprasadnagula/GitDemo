<?php
// *** Logout the current user.
$logoutGoTo = "../loginPage.php";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['ID'] = NULL;
$_SESSION['Name'] = NULL;
unset($_SESSION['ID']);
unset($_SESSION['Name']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>
<!DOCTYPE html">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
