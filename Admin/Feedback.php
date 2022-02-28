<!DOCTYPE html>
<html>
<head>
    <title>JOB PORTAL</title>
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
</head>

<body>
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
              
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Feedback</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Date</div></th>
                  </tr>
                  <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to execute
$sql = "select FeedBackId,FeedBack,FeedBackDate,JobSeekerName from FeedBack,JobSeeker_Registration where FeedBack.JobSeekerId=JobSeeker_Registration.JobSeekerId";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['FeedBackId'];
$Name=$row['JobSeekerName'];
$Feedback=$row['FeedBack'];
$FeedbakDate=$row['FeedBackDate'];

?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Feedback;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $FeedbakDate;?></strong></div></td>
                  </tr>
                  <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                  <tr>
                    <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                  </tr>
                  <?php
// Close the connection
mysqli_close($con);
?>
</table>
</body>
</html>
