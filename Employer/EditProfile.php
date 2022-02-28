<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
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
-->
    </style>
</head>

<body>
                <h2><span><a href="#">Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               <?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job1");
// Specify the query to execute
$sql = "select * from Employer_Registration where EmployerId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
<form method="post" action="UpdateProfile.php">
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td><strong>Company ID:</strong></td>
                    <td><span id="sprytextfield1">
                      <label>
                      <input name="txtId" type="text" id="txtId" value="<?php echo $row['EmployerId'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Company Name:</strong></td>
                    <td><span id="sprytextfield2">
                      <label>
                      <input name="txtName" type="text" id="txtName" value="<?php echo $row['CompanyName'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Contact Person:</strong></td>
                    <td><span id="sprytextfield3">
                      <label>
                      <input name="txtContact" type="text" id="txtContact" value="<?php echo $row['ContactPerson'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><span id="sprytextarea1">
                      <label>
                      <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"><?php echo $row['Address'];?></textarea>
                      </label>
                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><span id="sprytextfield4">
                      <label>
                      <input name="txtCity" type="text" id="txtCity" value="<?php echo $row['City'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><span id="sprytextfield5">
                      <label>
                      <input name="txtEmail" type="text" id="txtEmail" value="<?php echo $row['Email'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><span id="sprytextfield6">
                      <label>
                      <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Mobile'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Area of Work:</strong></td>
                    <td><span id="sprytextfield7">
                      <label>
                      <input name="txtArea" type="text" id="txtArea" value="<?php echo $row['Area_Work'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><span id="sprytextfield8">
                      <label>
                      <input name="txtUser" type="text" id="txtUser" value="<?php echo $row['UserName'];?>" />
                      </label>
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  </tr>
                  <tr>
                    <td><strong>Password:</strong></td>
                    <td><span id="sprytextfield9">
                      <label>
                      <input name="txtPassword" type="password" id="txtPassword" value="<?php echo $row['Password'];?>" />
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
</form>
</body>
</html>
