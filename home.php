<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body style="background-color:rgb(222, 212, 148)">
<div class="logo">
<div class="a25"><img src="cart.jpg" alt=""></div>
<div class="a25"><img src="g1.jpg" alt=""></div>
<div class="a25"><img src="g2.jpg" alt=""></div>
<div class="a25"><img src="g3.jpg" alt=""></div>
</div>

<h1 class="change">Shop With Us </h1>
<div class="first"><a href="login.php">Login</a></div>
<div class="last"><a href="showcart.php">Show Cart</a></div>


<br><br><br><br><br><br><br>


<hr style="width: 90%;position:relative;left:4rem;">




<?php
session_start();
if(isset($_SESSION['customer']) && $_SESSION['customer']!="" )
{
    echo "customer name is :".$_SESSION['customer'];
}
?>




<?php
$conn=mysqli_connect("localhost","root","","student");
$sql="select * from product";
$x=mysqli_query($conn,$sql);
while($y=mysqli_fetch_array($x))
{
?>




    <div class="row">
        <div class="a25">
            <img src=images/<?php echo $y[5]; ?> alt="">
            <div class="A">   <?php echo $y[1]; ?>    </div>
            <div class="B">Price:<?php echo $y[2]; ?>Rs </div>
            <div class="B">Discount: <strike>10%</strike><?php echo $y[3]; ?> </div>
            <div class="B">Stock :<?php echo $y[4]; ?> </div>
            <div class="B">Payment:Cash/Online</div>
            
        
        
            <hr><br>
            <a href="cart.php?id=<?php echo $y[0];?>">add to cart</a>
        </div>

        <div class="a25">

        <?php $y=mysqli_fetch_array($x) ?>
        <img src=images/<?php echo $y[5];?> alt="">
            <div class="A">   <?php echo $y[1]; ?>    </div>
            <div class="B">Price:<?php echo $y[2]; ?>Rs </div>
            <div class="B">Discount: <strike>10%</strike><?php echo $y[3]; ?> </div>
            <div class="B">Stock :<?php echo $y[4]; ?> </div>
            <div class="B">Payment:Cash/Online</div>
        
            
            <hr><br>
            <a href="cart.php?id=<?php echo $y[0];?>">add to cart</a>
        </div>


        <div class="a25">

        
        <?php $y=mysqli_fetch_array($x) ?>
        <img src=images/<?php echo $y[5];?> alt="">
        <div class="A">   <?php echo $y[1]; ?>    </div>
            <div class="B">Price:<?php echo $y[2]; ?>Rs </div>
            <div class="B">Discount: <strike>10%</strike><?php echo $y[3]; ?> </div>
            <div class="B">Stock :<?php echo $y[4]; ?> </div>
            <div class="B">Payment:Cash/Online</div>
        
            
            <hr><br>
            <a href="cart.php?id=<?php echo $y[0];?>">add to cart</a>
        </div>


        <div class="a25">

        <?php $y=mysqli_fetch_array($x) ?>


        <img src=images/<?php echo $y[5];?> alt="">
        <div class="A">   <?php echo $y[1]; ?>    </div>
            <div class="B">Price:<?php echo $y[2]; ?>Rs </div>
            <div class="B">Discount: <strike>10%</strike><?php echo $y[3]; ?> </div>
            <div class="B">Stock :<?php echo $y[4]; ?> </div>
            <div class="B">Payment:Cash/Online</div>
        
            
            <hr><br>
            <a href="cart.php?id=<?php echo $y[0];?>">add to cart</a>
        </div>

    </div>
    <?php 
}
    ?>
    
</body>
</html>