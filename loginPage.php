<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
$con = mysqli_connect("localhost","root","","job1");

$sql = "select * from admin_login where UserName='".$UserName."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'homePage.php\';</script>';
}
else
{
header("location:Admin/HomePage.php");
} 
mysqli_close($con);
}
else if($UserType=="JobSeeker")
{
$con = mysqli_connect("localhost","root","","job1");

$sql = "select * from jobseeker_registration where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'homePage.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekerId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:JobSeeker/HomePage.php");
} 
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","root","","job1");

$sql = "select * from employer_registration where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'homePage.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:Employer/HomePage.php");
} 
mysqli_close($con);
}
?>
    </body>
</html>
