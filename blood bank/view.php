<style>
    .s
    {
        color:blue;
        margin-left:400px;
        margin-top:100px;

    }
    .h{
        height:100px;
        width:1540px;
        background-color:#a30000;
        margin-top:-10px;
        margin-left:-10px;
    }
    .w1{
        padding-left:330px;
        font-size:50px;
        letter-spacing:1.5px;
        color:white;
    
    }
    .w2{
        margin-top:-30px;
        margin-left:700px;
        color:white;

    }
    .b1{
        color:green;
        font-size:20px;
    }
    
    .b2{
        color:red;
        font-size:20px;
    }
    .c1{
        color:black;
        font-size:20px;
    }
    .body{
        background-image:url('bgb.php');
    }
</style>

<?php

$con=mysqli_connect('localhost','root','seedit','bb');
$q="select * from blooddonation where status='pending'";
$rs=mysqli_query($con,$q);
if(mysqli_num_rows($rs)==0)
{
    echo "No Record Found";
}
echo"<div class='h'><h1 class='w1'>BLOODBANK MANAGMENT SYSTEM</h1>
<h2 class='w2'>[DONATION REQUEST]</h2></div>";


echo "<table border=1 width='50%'class='s'>";
 echo"
    <tr class='c1'>
    <td>BLOOD GROUP</TD>
    <TD>UNIT</TD>
    <TD>ANY DIEASES</TD>
    </TR>";
    
while($row=mysqli_fetch_array($rs)){
   
    echo"<tr>
    
   <td> $row[bloodgroup]</td><td>$row[unit]</td><td>$row[dieases]</td>
   <td class='b1'><a href='accept.php?id=$row[bloodgroup]'><span class='b1'>ACCEPT</span></a></td>
   
   <td><a href='reject.php?id=$row[bloodgroup]'><span class='b2'>REJECT</span></a></td>
   
   </tr>";

    
}

echo "<table>";


?>