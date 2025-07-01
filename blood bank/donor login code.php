<?php

$a=$_GET['s1'];
$b=$_GET['s2'];

$con=mysqli_connect('localhost','root','seedit','bb');
$q="select * from registration where name='$a' and password='$b'";
$rs=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rs)){
    echo"<script>window.location='login show.php'</script>";
}
else{
    echo"eroor";
}
?>