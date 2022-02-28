
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php

	$News=$_POST['txtNews'];
	$Date=$_POST['txtDate'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job1");
	// Specify the query to Insert Record
	$sql = "insert into News_Master	(News,NewsDate)values('".$News."','".$Date."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("News Inserted Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>
