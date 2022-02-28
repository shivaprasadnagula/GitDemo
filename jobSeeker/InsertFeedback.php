<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost","root","","job1");
	// Specify the query to Insert Record
	$sql = "insert into feedback(JobSeekerId,Feedback,FeedbackDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully and date : $FDate");window.location=\'Feedback.php\';</script>';
?>
</body>
</html>
