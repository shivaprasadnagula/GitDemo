<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Registering JobSeeker Details</title>
</head>
<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Qualification=$_POST['cmbQual'];
	$Gender=$_POST['cmbGender'];	
	$BirthDate=$_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];//this will get the path or name of the file
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
        //uploading file from the present directory to the uploadedFiles Directory
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"uploadedFiles/".$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job1");
	// Specify the query to Insert Record
	$sql = "insert into JobSeeker_registration(JobSeekerName,Address,City,Email,Mobile,Qualification,Gender,DOB,Resume,Status,UserName,Password,Question,Answer) values('".$Name."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Qualification."','".$Gender."','".$BirthDate."','".$path1."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'homePage.php\';</script>';
?>
</body>
</html>