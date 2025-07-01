<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','bb');
$q="update blooddonation set status='accept' where bloodgroup='$a'";
$rs=mysqli_query($con,$q);

echo"accept";
?>