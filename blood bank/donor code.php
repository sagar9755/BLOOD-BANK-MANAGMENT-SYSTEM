<?php
$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$d=$_GET['t4'];
$e=$_GET['t5'];


$con=mysqli_connect('localhost','root','seedit','bb');
$q="insert into registration value('$a','$b','$c','$d','$e')";
$rs=mysqli_query($con,$q);
if($rs){
    echo"save";
}
else{
    echo"eroor";
}
?>
