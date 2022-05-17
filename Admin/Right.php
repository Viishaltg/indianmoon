           <?php

$con = mysqli_connect("localhost","root", "", "shopping");

$sql = "select * from Category_Master";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryImg=$row['Image'];


?>
<div class="col-lg-6">
      <div class="mencollection">
    
        
        
        <table>
          <tr>
            <td class='img'><a href="Products.php?CategoryId=<?php echo $Id;?>"><img src='<?php echo $CategoryImg;?>' alt="" /></a></td>
          </tr>
        </table>
          
          
      </div>
    </div>
  
    
    <?php
	}

mysqli_close($con);
?>
