<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','bb');
$q="update blooddonation set status='reject' where bloodgroup='$a'";
$rs=mysqli_query($con,$q);

echo"reject";
?>