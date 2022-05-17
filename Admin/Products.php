<?php require_once('../Connections/shop.php'); ?>
<?php require_once('../Connections/shop.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = stripslashes($theValue);


  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


$query_Recordset1 = "SELECT CategoryId, CategoryName FROM category_master";
$Recordset1 = mysqli_query($shop, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

$colname_Recordset2 = "-1";
if (isset($_GET['CategoryId'])) {
  $colname_Recordset2 = $_GET['CategoryId'];
}

$query_Recordset2 = sprintf("SELECT ItemId, ItemName, `Size`, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset2, "int"));
$Recordset2 = mysqli_query($shop, $query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>  
  <?php
  include "Header.php";
  ?>
<form class="addform" action="InsertProduct.php?CategoryId=<?php echo $_GET['CategoryId'];?>" method="post" enctype="multipart/form-data" name="form1" id="form1">  
<div class="container">
<div class="brand-logo"><img src="./images/logo.jpg" width="100%" style="border-radius:50%;" alt=""></div>
  <div class="brand-title">ADD ITEMS</div>
  <div class="inputs">        
  <table style="width: 100%;">
  <tr>
    <td><span id="sprytextfield1">
                <label>
    Item Name              </label>
                <input type="text" name="txtName" id="txtName" sty />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    <td>        <label>Item Image
                  </label>
                <input type="file" name="txtFile" style="opacity: 1;" id="txtFile" />
              </td>
  </tr>
  <tr>
    <td colspan="2"><span id="sprytextarea1">
                <label> Item Description
                  </label>
                <input name="txtDesc" id="txtDesc" cols="35" rows="3"></input>
                <span class="textareaRequiredMsg">A value is required.</span></span></td>
    
  </tr>
  <tr>
    <td><span id="sprytextfield2">
                <label>Item Size
                  </label>
                <input type="text" name="txtSize" id="txtSize" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    <td>
    <span id="sprytextfield3">
                <label>Item Price
                  </label>
                <input type="text" name="txtPrice" id="txtPrice" />
                <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
  </tr>
  <tr>
    <td><span id="sprytextfield4">
                <label>Item Discount
                  </label>
                <input type="text" name="txtDiscount" id="txtDiscount" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    <td><span id="sprytextfield5">
                <label>Final Price
                  </label>
                <input type="text" name="txtFinal" id="txtFinal" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
</table>
    <button type="submit" name="button" id="button" value="Submit">SUBMIT</button>
  </div>
  
</div>
</form>

<!-- 
        </td>
      </tr>
      <tr>
        <td height="27" bgcolor="#003300">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;
          <table width="100%" border="1" cellpadding="2" cellspacing="2" bordercolor="#003300">
            <tr>
              <td bgcolor="#669900"><span class="style12">ItemId</span></td>
              <td bgcolor="#669900"><span class="style12">ItemName</span></td>
              <td bgcolor="#669900"><span class="style12">Size</span></td>
              <td bgcolor="#669900"><span class="style12">Image</span></td>
              <td bgcolor="#669900"><span class="style12">Price</span></td>
              <td bgcolor="#669900"><span class="style12">Discount</span></td>
              <td bgcolor="#669900"><span class="style12">Total</span></td>
            </tr> -->

<div class="container">
  <div class="row">
    
            <?php if(mysqli_num_rows($Recordset2) > 0) { do { ?>
              <div class="col-lg-4">
      <div class="categorybox">
      <img src="<?php echo $row_Recordset2['Image']; ?>" width="100%" alt="">

      <div class="categoryboxab"><ul><li class="name"><?php echo $row_Recordset2['ItemName']; ?></li>
      <li class="price"><?php echo $row_Recordset2['Price']; ?></li></ul></div>
    </div>
    </div>              <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2)); } ?>

    </div>
</div>

   <?php
 include "Footer.php";
 ?>


<?php
mysqli_free_result($Recordset1);

mysqli_free_result($Recordset2);
?>






