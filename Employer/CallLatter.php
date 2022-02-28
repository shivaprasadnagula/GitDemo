<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>JOB PORTAL</title>
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
</head>

<body>

    <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               
<?php
$JobId=$_GET['JobId'];
$JobSeekerId=$_GET['JobSeekerId'];
$AppId=$_GET['AppId'];
$Status="Call Latter Send";
$Description=$_POST['txtDesc'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to Update Record
$sql = "Update Application_Master set Status='".$Status."' ,Description='".$Description."' where ApplicationId=".$AppId." and JobId='".$JobId."' and JobSeekerId='".$JobSeekerId."'";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Call Latter Send Succesfully");window.location=\'Application.php\';</script>';
?>
</body>
</html>
