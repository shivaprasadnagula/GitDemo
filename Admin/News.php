<!DOCTYPE html>
<html>
<head>
    <title>JOB PORTAL</title>
</head>
<body>
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="27" bgcolor="#A0B9F3"><span class="style4 style10">Create News</span></td>
                  </tr>
                  <tr>
                    <td height="26">
                        <form id="form1" method="post" action="InsertNews.php">
                        <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="36"><span class="style9">News:</span></td>
                            <td><span id="sprytextfield1">
                              <label>
                              <input type="text" name="txtNews" id="txtNews" />
                              </label>
                              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td height="35"><span class="style9">News Date:</span></td>
                            <td><span id="sprytextfield2">
                              <label>
                                  <input type="date" name="txtDate" id="txtDate" />
                              </label>
                              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><label>
                              <input type="submit" name="button" id="button" value="Submit" />
                            </label></td>
                          </tr>
</table>
                    </form></td>
                  </tr>
                  <tr>
                    <td height="25" bgcolor="#A0B9F3"><span class="style3">News List</span></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1"><div align="left" class="style12 style13 style7 style8">Id</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">News</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Date</div></th>
                          <th height="32" bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Edit</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Delete</div></th>
                        </tr>
                        <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to execute
$sql = "select * from News_Master";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['NewsId'];
$News=$row['News'];
$NewsDate=$row['NewsDate'];
?>
                        <tr>
                          <td><div align="left" class="style11 style7 style8"><?php echo $Id;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><?php echo $News;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><?php echo $NewsDate;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><a href="EditNews.php?NewsId=<?php echo $Id;?>">Edit</a></div></td>
                          <td><div align="left" class="style11 style7 style8"><a href="DeleteNews.php?NewsId=<?php echo $Id;?>">Delete</a></div></td>
                        </tr>
                        <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
                        <tr>
                          <td colspan="5"><div align="left" class="style11 style7 style8"><?php echo "Total ".$records." Records"; ?> </div></td>
                        </tr>
                        <?php
// Close the connection
mysqli_close($con);
?>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="26"><form method="post" action="InsertNews.php">
                      <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                        </table>
                    </form></td>
                  </tr>
                </table>
</body>
</html>
