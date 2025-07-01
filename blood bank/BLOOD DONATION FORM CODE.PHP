<?php
$a=$_GET['s1'];
$b=$_GET['s2'];
$c=$_GET['s3'];

$con=mysqli_connect('localhost','root','seedit','bb');
$q="insert into blooddonation value('$a','$b','$c','pending')";
$rs=mysqli_query($con,$q);
if($rs){
    echo"submit";
}
else{
    echo"eroor";
}
?>



