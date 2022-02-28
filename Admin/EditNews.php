<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
    
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               
                <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td><?php
$Id=$_GET['NewsId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to execute
$sql = "select * from News_Master where NewsId=".$Id."";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['NewsId'];
$News=$row['News'];
$NewsDate=$row['NewsDate'];
}
?>
                        <form method="post" action="UpdateNews.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">News Id</span></td>
                              <td><span id="sprytextfield1">
                                <label>
                                <input name="txtNewsId" type="text" id="txtNewsId" value="<?php echo $Id;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">News:</span></td>
                              <td><span id="sprytextfield2">
                                <label>
                                <input name="txtNews" type="text" id="txtNews" value="<?php echo $News;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">News Date:</span></td>
                              <td><span id="sprytextfield3">
                                <label>
                                    <input name="txtNewsDate" type="date" id="txtNewsDate" value="<?php echo $NewsDate;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="submit" value="Update Record" /></td>
                            </tr>
</table>
                        </form>
                        <?php
// Close the connection
mysqli_close($con);
?>
                    </td>
                  </tr>
                </table>
    </body>
</html>