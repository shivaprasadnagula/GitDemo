<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>employer details insertion </title>
    </head>
    <body>
        <?php

	$CompnayName=$_POST['txtName'];
	$ContactPerson=$_POST['txtPerson'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Area=$_POST['txtAreaWork'];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="Employer";
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","","job1");
	// Specify the query to Insert Record
        echo '<script type="text/javascript">console.log("connection established successfully");</script>';
	$sql = "insert into Employer_Registration(CompanyName,ContactPerson,Address,City,Email,Mobile,Area_Work,Status,UserName,Password,Question,Answer) values('".$CompnayName."','".$ContactPerson."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Area."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	mysqli_query ($con,$sql);
        echo '<script type="text/javascript">console.log("query executed successfully");</script>';
	// Close The Connection
	mysqli_close ($con);
        echo '<script type="text/javascript">console.log("connection closed successfully");</script>';
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'homePage.php\';</script>';

?>
    </body>
</html>
