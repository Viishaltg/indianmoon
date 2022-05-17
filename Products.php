<?php require_once('Connections/shop.php'); ?>
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

$colname_Recordset1 = "-1";
if (isset($_GET['CategoryId'])) {
  $colname_Recordset1 = $_GET['CategoryId'];
}

$query_Recordset1 = sprintf("SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysqli_query($shop, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);

$query_Recordset2 = "SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master";
$Recordset2 = mysqli_query($shop, $query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>
  <?php
  include "Header.php";
  ?>

  <div id="content">
    <h2><span style="color:#003300"> Products</span></h2>
    <table width="100%" border="1" cellpadding="2" cellspacing="2">
      <tr>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">ItemName</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Description</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Size</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Image</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Price</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Discount</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Total</span></td>
      </tr>

      <?php
	  if(isset($_GET['CategoryId']))
	  {
	  do
	  {
	  ?>
        <tr>
          <td><?php echo $row_Recordset1['ItemName']; ?></td>
          <td><?php echo $row_Recordset1['Description']; ?></td>
          <td><?php echo $row_Recordset1['Size']; ?></td>
          <td><img src="Products/<?php echo $row_Recordset1['Image']; ?>" height="125px" width="125px"/></td>
          <td><?php echo $row_Recordset1['Price']; ?></td>
          <td><?php echo $row_Recordset1['Discount']; ?></td>
          <td><?php echo $row_Recordset1['Total']; ?></td>
        </tr>
        <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
		}
		else
		{
      if(mysqli_num_rows($Recordset2) > 0){
		do
	  {
	  ?>
        <tr>
          <td><?php echo $row_Recordset2['ItemName']; ?></td>
          <td><?php echo $row_Recordset2['Description']; ?></td>
          <td><?php echo $row_Recordset2['Size']; ?></td>
          <td><img src="Products/<?php echo $row_Recordset2['Image']; ?>" height="125px" width="125px"/></td>
          <td><?php echo $row_Recordset2['Price']; ?></td>
          <td><?php echo $row_Recordset2['Discount']; ?></td>
          <td><?php echo $row_Recordset2['Total']; ?></td>
        </tr>
        <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2));
		}else{
      echo "<tr><td colspan='7'><center>No Data</center</td></tr>";
    }
  }

        ?>
    </table>
    
  
   <?php
 include "Footer.php";
 ?>

<?php
mysqli_free_result($Recordset1);

mysqli_free_result($Recordset2);
?>