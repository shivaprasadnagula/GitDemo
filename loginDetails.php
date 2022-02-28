<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            html{
                scrollbehaviour:smooth;
            }
            .text_color{
                color: #43BE31;
            }
            
            .text_color1{
                color: #B2B2B2;
            }
        </style>
    </head>
    <body>
        
        <h2 align="center" class="text_color">Login</h2>
<div class="login" align="center">
    <form name="form1" method="post" action="loginPage.php" style="text-align: center">
                  <table width="100%" border="0">
                    <tr>
                      <td><strong>User Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="text" name="txtUser" id="txtUser">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="password" name="txtPass" id="txtPass">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><strong>User Type</strong></td>
                    </tr>
                    <tr>
                      <td><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" bgcolor="#B2B2B2" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <br/>
                  </table>
        <br/>
        <table align="center">
                    <tr>
                      <td><div align="center" class="text_color1"><a class="text_color1" href="Forget.php"><strong>Forgot Password? </strong></a>&nbsp;
                              <a class="text_color1" href="JobSeekerRegistration.php" >JobSeekerRegistration</a> &nbsp;
                              <a class="text_color1" href="EmployerRegistration.php">EmployerRegistration</a>
                              
                          </div></td> 
                    </tr>
                  </table>
      </form>
</div>
        <?php
        
              
        ?>
    </body>
</html>
