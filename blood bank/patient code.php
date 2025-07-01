<?php
$a=$_GET['p1'];
$b=$_GET['p2'];
$c=$_GET['p3'];
$d=$_GET['p4'];
$e=$_GET['p5'];


$con=mysqli_connect('localhost','root','seedit','bb');
$q="insert into patient value('$a','$b','$c','$d','$e')";
$rs=mysqli_query($con,$q);
if($rs){
    echo"save";
}
else{
    echo"eroor";
}
?>