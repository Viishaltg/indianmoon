<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
 <!-- <div id="right-col">
    <h2>Login</h2>
    <div class="scroll">
      <form name="form1" method="post" action="login.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26">User Name:</td>
          </tr>
          <tr>
          <td height="30"><span id="sprytextfi">
            <label>
            <input type="text" name="txtUserName" size="18" id="txtUserName" />
            </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
          <tr>
            <td height="26">Password:</td>
          </tr>
          <tr>
            <td height="31"><span id="sprytextld2">
          <label>
              <input type="password" name="txtPassword" size="18" id="txtPassword">
              </label>
            <span class="textfieldRequiredMsg">*</span></span></td>
          </tr>
          <tr>
            <td height="29">User Type:</td>
          </tr>
          <tr>
            <td><p>
              <label>
                <input type="radio" name="rdType" value="Customer" id="rdType_1">
                Customer</label>
              <br>
            </p></td>
          </tr>
          <tr>
            <td>              
                <center><input type="submit" name="button" id="button" style="margin-top:-10px;" value="Login"></center>
			</td>			
          </tr>
        </table>
      </form>
  </div>
    <h2>&nbsp;</h2>
   <ul class="side">
    
    </ul>
   
</div> -->



<?php
  include "Header.php";
  ?>
<div class="container">
  <div class="row">
    <div class="col-lg-6"><div class="register">
      <h2>New Customer</h2>
      <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.

</p>
<button><a href="Register.php">Continue</a></button>
    </div></div>
    <div class="col-lg-6"><div class="login">
      <h2>Returning Customer</h2>
<form name="form1" method="post" action="login.php">
<span id="sprytextfield1"><input type="text" placeholder="Enter Your Username" name="txtUserName" id="txtUserName"></span>
<br><span id="sprytextfield2">  <input placeholder="Enter Your Password" type="password" name="txtPassword" id="txtPassword"> </span>
    <br>  
      <input type="radio"  name="rdType" class="radio" value="Customer" id="rdType_1"><span> &nbsp;&nbsp;Customer Login</span>
      <input type="radio"  name="rdType" class="radio" value="Admin" id="rdType_2"><span> &nbsp;&nbsp;Admin Login</span>
    <br>  <button type="submit" name="button" id="button">Submit</button>
</form>
    </div></div>
  </div>
</div>
<?php
 include "Footer.php";
 ?>
 <script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
