
  <?php
  include "Header.php";
  ?>
  

        <form action="InsertCategory.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="addform">  
<div class="container">
<div class="brand-logo"><img src="./images/logo.jpg" width="100%" style="border-radius:50%;" alt=""></div>
  <div class="brand-title">ADD NEW CATEGORY</div>
  <div class="inputs">        
  <table style="width: 100%;">
  <tr>
    <td><span id="sprytextfield1">
                <label>
    Category Name              </label>
    <span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtName" id="txtName" />
                  </label>
                  <span class="textfieldRequiredMsg">Enter Category.</span></span></td>
    <td>        
              
              
                <label> Category
    </label>            
    <input type="file" name="txtFile" id="txtFile" />
              </td>
  </tr>
  <tr>
    <td colspan="2"><span id="sprytextarea1">
                  <label>Category Description
                    </label>
                  <input name="txtDesc" id="txtDesc" cols="35" rows="3"></input>
                <span class="textareaRequiredMsg">Enter Description</span></span>
                </td>
    
  </tr>

</table>
    <button type="submit" name="button" id="button" value="Submit">SUBMIT</button>
  </div>
  
</div>
</form>
  
        
        
<div class="container tablelist my-5">
  <h1>Category List</h1>
<table width='100%'>
  <tr><th>
Id
  </th>
      <th>
Category Name
      </th>
      <th>
Description
      </th>
      <th>
Edit Category
      </th>
      <th>
Delete Category
      </th></tr>
            <?php

$con = mysqli_connect("localhost","root", "", "shopping");

$sql = "select * from Category_Master";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];
$Description=$row['Description'];

?>
            <tr>
  <td><?php echo $Id;?></td>
  <td><?php echo $CategoryName;?></td>
  <td><?php echo $Description;?></td>
  <td><a href="EditCategory.php?CatId=<?php echo $Id;?>">Edit</a></td>
  <td><a href="DeleteCategory.php?CatId=<?php echo $Id;?>">Delete</a></td>
</tr>

            <?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
            <tr>
              <td colspan="5" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
            </tr>
            <?php
// Close the connection
mysqli_close($con);
?>

</table>
</div>    





<div class="container-fluid">
  <div class="row">
  <?php
 include "Right.php";
 ?>

  </div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
<?php
 include "Footer.php";
 ?>
