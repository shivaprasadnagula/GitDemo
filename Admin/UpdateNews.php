
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$Id = $_POST['txtNewsId'];
$News=$_POST['txtNews'];
$Date=$_POST['txtNewsDate'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to Update Record
$sql = "Update News_Master set News='".$News."',NewsDate='".$Date."' where NewsId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("News Updated Succesfully");window.location=\'News.php\';</script>';
?>
</body>
</html>
