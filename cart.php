<?php
$id=$_REQUEST['id'];
$customer="shubham";
$conn=mysqli_connect("localhost","root","","student");
$sql="insert into cart (itemid,customer) values($id,'$customer') ";
mysqli_query($conn,$sql);
header("Location:home.php");

 


?>