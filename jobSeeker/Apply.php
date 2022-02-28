<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$JobId=$_GET['JobId'];
	$JobSeekerId=$_SESSION['ID'];
	$Status="Applied";
	$Desc="No Message";
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job1");
	// Specify the query to Insert Record
	$sql = "select * from application_master where JobSeekerId='".$JobSeekerId."' and JobId='".$JobId."'";
	// execute query
	$result1 = mysqli_query ($con,$sql);
	$records1 = mysqli_num_rows($result1);
	// Close The Connection
	mysqli_close ($con);
	if($records1==0)
	{
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job1");
	
	// Specify the query to Insert Record
	$sql = "insert into application_master (JobSeekerId,JobId,Status,Description) values('".$JobSeekerId."','".$JobId."','".$Status."','".$Desc."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Succesfully Applied For Job");window.location=\'SearchJob.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("You have already Applied For Job");window.location=\'SearchJob.php\';</script>';
}
?>
</body>
</html>
