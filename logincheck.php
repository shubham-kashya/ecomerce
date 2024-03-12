<?php 

$conn=mysqli_connect("localhost","root","","student");
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];

$sql="select * from customer where name='$name' and password='$password' ";
$x=mysqli_query($conn,$sql);

if(mysqli_num_rows($x) > 0)
{
    echo "<h1>Login success</h1>";
   session_start();
  $_SESSION['customer']=$name;


}

else

{
    echo "<h2> user name/password incorrect</h2>";
    session_start();
    $_SESSION['customer']="";
}

header("Location:home.php");
?>