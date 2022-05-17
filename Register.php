


<?php
  include "Header.php";
  ?> 

<div class="container">
<div class="form">
		<h2>New User Registration</h2>

<form action="insert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" name="form2" id="form2">
  <table width="100%" border="0">
	<tr>
	  <td><div>Customer Name:</div></td>
	  <td><span id="sprytextfield3">
		<label>
		<input type="text" name="txtName" id="txtName" />
		</label>
	
	</tr>
	<tr>
	  <td><div >Address:</div></td>
	  <td><span id="sprytextarea1">
		<label>
		<input name="txtAddress" type="text" id="txtAddress" />
		</label>
	
	</tr>
	<tr>
	  <td ><div >City:</div></td>
	  <td><label>
		<select name="cmbCity" id="cmbCity">
		  <option>New York</option>
		  <option>Tokyo</option>
		</select>
	  </label></td>
	</tr>
	<tr>
	  <td>Email ID:</td>
	  <td><span id="sprytextfield4">
		<label>
		<input type="text" name="txtEmail" id="txtEmail" />
		</label>
	
	</tr>
	<tr>
	  <td>Mobile Number:</td>
	  <td><span id="sprytextfield5">
		<label>
		<input type="text" name="txtMobile" id="txtMobile" />
		</label>
	
	</tr>
	<tr>
	  <td>Gender:</td>
	  <td><label>
		<select name="rdGender" id="rdGender">
		  <option>Male</option>
		  <option>Female</option>
		</select>
	  </label></td>
	</tr>
	<tr>
	  <td>Birth Date:</td>
	  <td><span id="sprytextfield9">
		<label>
		<input type="text" name="txtDate" id="txtDate" onclick="ds_sh(this);" />
		</label>
	
	</tr>
	<tr>
	  <td>User Name:</td>
	  <td><span id="sprytextfield6">
		<label>
		<input type="text" name="txtUserName" id="txtUserName3" />
		</label>
	
	</tr>
	<tr>
	  <td>Password:</td>
	  <td><span id="sprytextfield7">
		<label>
		<input type="password" name="txtPassword" id="txtPassword" />
		</label>
	
	</tr>
	<tr>
	  |
	  <td style="  text-align:center;" colspan="2">
		<button type="submit" name="button2" id="button2" value="Register" >Register</button>
	  </td>
	</tr>
	
  </table>
</form>
</div>
</div>

<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
//-->
</script>
<?php
 include "Footer.php";
 ?> 