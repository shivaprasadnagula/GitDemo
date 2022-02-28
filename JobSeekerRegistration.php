<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Job Seeker Registration form</title>

        <script>//
//            validateForm=function(this)
//            {
//                var x = ParseInt(document.forms["jseekerFrom"]["txtMobile"].value);
//                if(x.length()!=10 || isNaN(x))
//                {
//                    alert("you entered incorect..!");
//                }
//            }
        </script>
    </head>
    <body>
        
                <h2><span><a href="#">Job Seeker Registration Form</a></span></h2>
               

                    <div class="login">

                <form action="JobSeekerDetailsInsertion.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" id="form2" name="jseekerFrom">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>JobSeeker Name:</td>
                      <td>
                        <label>
                            <input type="text" placeholder="Enter Name" name="txtName" id="txtName" />
                        </label>
                      </td>
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
                      <span class="textfieldRequiredMsg">Enter Email Id</span></span></td>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield6">
                        <label>
                            <input type="text" name="txtMobile" id="txtMobile" maxlength="10" minlength="10"/>
                        </label>
                      <span class="textfieldRequiredMsg">Enter Mobile</span></span></td>
                    </tr>
                    <tr>
                      <td>Qualification:</td>
                      <td><label>
                        <select name="cmbQual" id="cmbQual">
                          <option value="B.C.A">B.C.A</option>
                          <option value="M.C.A">M.C.A</option>
                          <option value="B.Sc.I.T">B.Sc.I.T</option>
                          <option value="B.Sc.C.S">B.Sc.C.S</option>
                          <option value="M.Sc.I.T">M.Sc.I.T</option>
                          <option value="M.Sc.C.S">M.Sc.C.S</option>
                          <option value="M.B.A">M.B.A</option>
                          <option value="B.B.A">B.B.A</option>
                          <option value="Other">Other</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Other:</td>
                      <td><label>
                        <input type="text" name="txtOther" id="txtOther" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>Gender:</td>
                      <td><label>
                        <select name="cmbGender" id="cmbGender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>BirthDate:</td>
                      <td><span id="sprytextfield7">
                        <label>
                            <input type="date" name="txtBirthDate" onclick="ds_sh(this);" id="txtBirthDate" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter Birth Date</span></span></td>
                    </tr>
                    <tr>
                      <td>Upload Marksheet:</td>
                      <td><label>
                        <input type="file" name="txtFile" id="txtFile" />
                      </label></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      <span class="textfieldRequiredMsg">Enter User Name</span></span></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label><span id="sprytextfield9">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      <span class="textfieldRequiredMsg">Enter Password</span></span></label></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                      <td><label>
                        <select name="cmbQue" id="cmbQue">
                          <option selected="selected">What is Your Pet Name?</option>
                          <option>Who is Your Favourite Person?</option>
                          <option>What is the Name of Your First School?</option>
                        </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                      <td><span id="sprytextfield10">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                        </label>
                      </span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        
                        <div align="center">
                          <input type="submit" name="button2" style="text-align: center" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                 </form>
              </div>
              <p class="btn-more box noprint">&nbsp;</p>
        <?php
        // put your code here
        ?>
    </body>
</html>
