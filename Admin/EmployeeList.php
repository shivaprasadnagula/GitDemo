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
                <?php include 'Employers.php';?>
              
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <th bgcolor="#74B9FF" class="style3"><div align="center"><strong>Employers List</strong></div></th>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                          <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Company Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Company Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>User Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left">Contact Person</div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Email Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Mobile Number</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>City</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Address</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Area Of Work</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Question</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Answer</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left"><strong>Status</strong></div></th>
                        </tr>
                                        <?php
                                        // Establish Connection with Database
                                    $con = mysqli_connect("localhost","root","","job1");
                                    // Specify the query to execute
                                    $sql = "select * from employer_registration";
                                    // Execute query
                                    $result = mysqli_query($con,$sql);
                                    // Loop through each records 
                                    while($row = mysqli_fetch_array($result))
                                    {
                                    $Id=$row['EmployerId'];
                                    $Name=$row['CompanyName'];
                                    $UserName=$row['UserName'];
                                    $CP=$row['ContactPerson'];
                                    $EmailId=$row['Email'];
                                    $MobileNumber=$row['Mobile'];
                                    $AD=$row['Address'];
                                    $City=$row['City'];
                                    $AW=$row['Area_Work'];
                                    $Sts=$row['Status'];
                                    $Qn=$row['Question'];
                                    $Answer=$row['Answer'];
                                    ?>
                                            <tr>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $UserName;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CP?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $EmailId;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MobileNumber?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $AD;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $AW?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qn;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Answer;?></strong></div></td>
                                              <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Sts;?></strong></div></td>
                                            </tr>
                                            <?php
                    }
                    // Retrieve Number of records returned
                    $records = mysqli_num_rows($result);
                    ?>
                                            <tr>
                                              <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Companies are using"; ?> </div></td>
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
