<?php require_once('../Connections/shop.php'); ?>
<?php require_once('Connections/shop.php'); ?>
<?php
session_start();
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

$query_Recordset1 = sprintf("SELECT ItemId, ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master WHERE CategoryId = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysqli_query($shop, $query_Recordset1) or die(mysqli_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);


$query_Recordset2 = "SELECT ItemId, ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item_master";
$Recordset2 = mysqli_query($shop, $query_Recordset2) or die(mysqli_error());
$row_Recordset2 = mysqli_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>
  <?php
  include "Header.php";
  ?>
<?php include "Right.php";
?>

<div class="container my-5">
  <h1 style="text-align: center; font-family: 'Viaoda Libre', cursive;" class="mb-5">Our Collections</h1>
  <div class="row">
  <?php
	  if(isset($_GET['CategoryId']))
	  { 
      if(mysqli_num_rows($Recordset1) > 0){
        do 
	  { 
	  ?>
  <div class="col-lg-4">
      <div class="categorybox">
      <a href="itemdetail.php">    <img src="<?php echo $row_Recordset1['Image']; ?>" width="100%" alt="">

      <div class="categoryboxab"><ul><li class="name"><?php echo $row_Recordset1['ItemName']; ?></li>
      <li class="price"><?php echo $row_Recordset1['Price']; ?></li></ul></div></a>
    </div>
    </div>
    <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1));
		}
  }
		else
		{ 
      if(mysqli_num_rows($Recordset2) > 0){
		do 
	  { 
	  ?>

<div class="col-lg-4">
      <div class="categorybox">
      <a href="itemdetail.php"><img src="<?php echo $row_Recordset2['Image']; ?>" width="100%" alt=""

      <div class="categoryboxab"><ul><li class="name"><?php echo $row_Recordset2['ItemName']; ?></li>
      <li class="price"><?php echo $row_Recordset2['Price']; ?></li></ul></div>></a>
    </div>
    </div>
    <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2));
		}
  }
        
        ?>
  </div>
</div>






   <?php
 include "Footer.php";
 ?>
