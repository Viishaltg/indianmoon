




<div class="container my-5">
<?php

$con = mysqli_connect("localhost","root", "", "shopping");

$sql = "select * from Category_Master";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];


?>
<a class="fancy" href="Products.php?CategoryId=<?php echo $Id;?>">
  <span class="top-key"></span>
  <span class="text"><?php echo $CategoryName;?></span>
  <span class="bottom-key-1"></span>
  <span class="bottom-key-2"></span>
</a>
<?php
	}

mysqli_close($con);
?>
</div>