<?php
$a=$_GET["s1"];
$b=$_GET["s2"];

$con=mysqli_connect('localhost','root','seedit','bb');
$q="select*from admin where username='$a' and password='$b'";
$rs=mysqli_query($con,$q);

if($row=mysqli_fetch_array($rs)){
    echo"<script>
    window.location='admin login show.php'
    </script>";

}
else{
    echo"wrong username and password";
}
?>