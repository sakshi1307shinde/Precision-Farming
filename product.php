<html>
    <head>
        <style>
            *{
                margin:auto auto;
                padding: auto auto;
            }
            .image{
           margin:auto auto;
           margin-top:100px;
           width:600px;
           color:black;
           font-size:18px;
           font-weight:700px;
            }
            .product{
                margin:auto auto;
              margin-top:100px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
            }
        </style>
    </head>
</html>
<?php
include("header.php");
?>
<div class="image">
<div class="row">
<div class="col-sm-"12">
<marquee direction=left> <h3><b>Shetkari Producer Company's Precision Farming</b></h3></marquee>
<img src="images\14.jpg" width=100% height=300px>
</div></div></div>
<h1 align=center>Our Products....</h1>
<div class="product">
    <?php
    include("connection.php");
    $rs=mysqli_query($cn,"select*from uploadproduct");
    $i=0;
    while($a=mysqli_fetch_array($rs))
    {
        $nm=$a["productname"];
        $pid=$a["productid"];
        $prc=$a["price"];
        $im=$a["image"];
        echo"<div class='col-md-3'>";
        echo"<div class=\"img-rounded\">";
        echo"<a href=\"images/$im\"target=\"_blank\">";
        echo"<img src=\"images/$im\"class=\"img-responsive\"width=100% height=80%>";
        echo"<b>Name: $nm</b> $pid</a></div></div>";
        

        $i++;
        if($i==3)
        {
            echo"</div>";
            echo"<div class=\"row\">";
            $i=0;
        }
    }
    ?>