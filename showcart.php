<style>
    img{width: 80%; height: 450px;margin-top: 4rem;position: absolute;left: 5rem;}
    a{color: white;background-color:cadetblue ;border: 1.5px solid black;font-size: large;padding: 20px 35px;margin-top: 2rem;;text-decoration: dashed;border-radius: 50%;margin-top: 10rem;margin-left: 35rem;font-weight: bold;}
    a:hover{border:1.5px solid white;color: black;}
    body{background-color: lightcyan;}
    h3{color: darkblue;}
</style>

<br><br>
<a href="home.php">Home</a>

<?php

session_start();
if(isset($_SESSION['customer']) && $_SESSION['customer']!="" )

{
$customer=$_SESSION['customer'];
$conn=mysqli_connect("localhost","root","","student");
$sql="select * from cart where customer='$customer' ";
$xc=mysqli_query($conn,$sql);
echo"<br>";
echo "<h3>Customer Name is :</h3> "  .$customer;
echo "<table border =4 width=100% >";
while($yc=mysqli_fetch_array($xc))

{
    $sql="select * from product where id=$yc[1]";
    $xp=mysqli_query($conn,$sql);

    while($yp=mysqli_fetch_array($xp))
{
echo "<tr>";
echo "<td>$yp[0]</td>";
echo "<td>$yp[1]</td>";
echo "<td>$yp[2]</td>";
echo "<td>$yp[3]</td>";
echo "<td>$yp[4]</td>";

echo "</tr>";
}

}
   echo "</table>";
}

?>