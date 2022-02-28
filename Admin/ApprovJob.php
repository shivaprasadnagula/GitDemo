<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Approving job</title>
</head>

<body>
<?php
$Id = $_GET['JobId'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to Update Record
$sql = "Update JobSeeker_registration set Status='Confirm' where JobSeekerId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Job Seeker Request Confirmed");window.location=\'ManageJobSeeker.php\';</script>';
?>
</body>
</html>
