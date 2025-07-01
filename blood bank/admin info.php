<style>
    .t1{
        margin-top:60px;
        margin-left:350px;
        width:60%;
    }
    .t2{
        font-size:30px;
        
    }
    .t3{
        color:blue;
        font-size:20px;
    }
    .t4{
        height:100px;
        width:1522px;
        background-color:#a30000;
        margin-left:-10px;
    }
    .w1{
        margin-left:300px;
        letter-spacing:2px;
        color:white;
        font-size:50px;

    }
    .w2{
        
        margin-left:600px;
        letter-spacing:2px;
        color:white;
        margin-top:-20px;
        

    }

    </style>
<?php

$con = mysqli_connect('localhost', 'root', 'seedit', 'bb');

$q = "select * from registration";
$rs = mysqli_query($con, $q);
echo"<div class='t4'>
<h1 CLASS='W1'>BLOODBANK MANAGMENT SYSTEM</H1>
<h2 CLASS='w2'>[REGISTRATION DETALIS]</div>";
echo"<table  border=2px  class='t1'>
    <tr class='t2'>
    <td>NAME</TD>
    <TD>ADDRESS</TD>
    <TD>BLOODGROUP</TD>
    <TD>EMAIL</TD>
    <TD>PASSWORD</TD>
    </TR>";

while ($row = mysqli_fetch_array($rs)) {
   
   echo" <TR class='t3'>
   <TD> $row[name]</TD>
     <TD>$row[address]</TD>
     <TD> $row[bloodgroup]</td>
       <TD>$row[email]</TD>
       <TD>$row[password]</TD>
       </TR>";
}
echo"</table>"
?>
