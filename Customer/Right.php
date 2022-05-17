<!-- 




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
</div> -->

<?php include 'Header.php' ?>
<div class="container item my-5">
    <div class="col-lg-8 border p-3 main-section">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="http://nicesnippets.com/demo/pd-image1.jpg" class="border p-3" style="width: 100%;">
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <span>Who What Wear</span>
                            <p class="m-0 p-0" style="color: 
#f63f3a;">Women's Velvet Dress</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">$30</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris.</span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section"><strong>Tag : </strong><a href="">Woman</a><a href="">,Man</a></p>
                        </div>
                        <div class="col-lg-12">
                            <h6>Quantity :</h6>
                            <input type="number" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 pb-2">
                                    <a href="#" class="btn  w-100" style="background-color:
#ffa42e;color:white;">Add To Cart</a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="btn  w-100" style="background-color:
#ffa42e;color:white;" >Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>

      <?php include 'Footer.php' ?>


