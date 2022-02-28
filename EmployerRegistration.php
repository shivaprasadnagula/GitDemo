<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

                <h2><span><a href="#">Employer Registration Form</a></span></h2>
                <form action="EmployeeDetailsInsertion.php" method="post">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Company Name:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Name</span></span></td>
                    </tr>
                   
                    <tr>
                      <td>Contact Person:</td>
                      <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Contact Person</span></span></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Enter Address</span></span></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter City</span></span></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Email</span></span></td>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Mobile</span></span></td>
                    </tr>
                    <tr>
                      <td>Area of Work: </td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txtAreaWork" id="txtAreaWork" />
                      <span class="textfieldRequiredMsg">Enter Area of Work</span></span></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield9">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter User Name</span></span></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label><span id="sprytextfield10">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      <span class="textfieldRequiredMsg">Enter Password</span></span></label></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><select name="cmbQue" id="cmbQue">
                        <option>What is Your Pet Name?</option>
                        <option selected="selected">Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                                                                  </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td><span id="sprytextfield11">
                      <label>
                      <input type="text" name="txtAnswer" id="txtAnswer" />
                      </label>
                      <span class="textfieldRequiredMsg">Enter Answer.</span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                 </form>
    </body>
</html>