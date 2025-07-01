<html>
    <head>
        <style>
            .a1{
                height:100px;
                width:1537px;
                background-color:#a30000;
                margin-left:-10px;
                margin-top:-10px;
            }
            .a2{
                font-size:30px;
                letter-spacing:3px;
                padding-top:30px;
                font-family:garamond (serif);
                color:white;
                padding-left:7px;
                
               
            }
            .nav {
                margin-left:1050px;
                color:white;
                margin-top:-45px;
                color:white;

               
            }
            body{
                background-image:url('bgb.jpg');
                background-size:cover;
                  
                  
                
            }
            .d1{
                height:250px;
                width:250px;
                border:2px solid black;
                margin-left:50px;
                margin-top:100px;
                float:left;
            }
            .f1{
                  float:left;
                padding-left:90px;
                font-size:60px;
                margin-top:-00px;
                color:white;
                float:left;
                
            }
            .f2{
                font-size:20px;
                color:white;
                margin-right:40px;
            }
        
        
        
            
                
            
            
            </style>
            </head>
            <body>
                <div class="a1">
                    <h1 class="a2">BLOOD DONATION MANAGMENT SYSTEM</H1>
                    <table CLASS="nav" width="25%">
                        <tr>
                          <td class="f"><a href="blood donation form.php"><b>DONATION FORM</b></a></TD>
                          
      <TD><a href="home page.php"><b>LOG OUT</b></a></TD>
                    
        

</div>
<div class="d1">
    <p class="f1">A+</p><BR><br>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='a' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">A-</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='a+' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">B+</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='b' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">B-</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='b-' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">AB+</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='ab+' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">AB-</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='ab-' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">O+</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='o' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
        <div class="d1">
    <p class="f1">O-</p>
    <p CLASS="F2">TOTAL UNIT=
        <?php
        $con=mysqli_connect('localhost','root','seedit','bb');
        $q="select sum(unit) as unit from blooddonation where bloodgroup='o-' and status='accept'";
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs)){
            echo" $row[unit]";
        }
        ?>
    </P>

        </div>
                
                
                    
                </body>
                </html>