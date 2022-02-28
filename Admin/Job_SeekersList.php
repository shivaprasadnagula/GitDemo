<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold;}

    </style>
    </head>
    <body>  
                <?php include 'Job_Seekers.php';?>
              
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <th bgcolor="#74B9FF" class="style3"><div align="center"><strong>Job Seekers List</strong></div></th>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                          <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Job Seeker Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>User Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Date Of Birth</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Gender</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Email Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Mobile Number</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>City</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Address</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Question</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Answer</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Resume</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Status</strong></div></th>
                        </tr>
                                        <?php
                                        // Establish Connection with Database
                                    $con = mysqli_connect("localhost","root","","job1");
                                    // Specify the query to execute
                                    $sql = "select * from jobseeker_registration";
                                    // Execute query
                                    $result = mysqli_query($con,$sql);
                                    // Loop through each records 
                                    while($row = mysqli_fetch_array($result))
                                    {
                                    $Id=$row['JobSeekerId'];
                                    $Name=$row['JobSeekerName'];
                                    $UserName=$row['UserName'];
                                    $DOB=$row['DOB'];
                                    $Gender=$row['Gender'];
                                    $Qualification=$row['Qualification'];
                                    $EmailId=$row['Email'];
                                    $MobileNumber=$row['Mobile'];
                                    $City=$row['City'];
                                    $AD=$row['Address'];
                                    $Qn=$row['Question'];
                                    $Answer=$row['Answer'];
                                    $Resume=$row['Resume'];
                                    $Sts=$row['Status'];
                                    ?>
                        <tr>
                            <td class="style3"><div align="left"><strong><?php echo $Id;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $Name;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $UserName;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $DOB?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $Gender;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $Qualification;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $EmailId;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $MobileNumber?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $City;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $AD;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $Qn;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><?php echo $Answer;?></strong></div></td>
                                              <td class="style3"><div align="left"><strong><a href="../uploadedFiles/<?php echo $Resume;?>" target="_blank">Resume</a></strong></div></td>                                              
                                              <td class="style3"><div align="left"><strong><?php echo $Sts;?></strong></div></td>
                                            </tr>
                                            <?php
                    }
                    // Retrieve Number of records returned
                    $records = mysqli_num_rows($result);
                    ?>
                                            <tr>
                                              <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Job Seekers are using"; ?> </div></td>
                                            </tr>
                        <?php
// Close the connection
mysqli_close($con);
?>
                        
                    </table></td>
                  </tr>
                </table>   
    </body>
</html>
