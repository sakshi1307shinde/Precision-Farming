<?php
 include("header.php");
?>
 <style type="text/css">


*{
  margin: 0;
  padding: 0;
}
    

.feedback{
         margin:auto auto;

         }
  #feedback{
        width:100%;
        height:50px;
}
.feedback{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  
.fdbk{
        margin:auto auto;
        margin-top:20px;
        width:600px;
        color:black;
        font-size:15px;
        font-weight:100px;
}  

</style>


<div class="feedback">
<div class="row">
<div class='col-sm-12'>
<marquee direction=left> <h3><b>Shetkari Producer Company's Precision Farming</b></h3></marquee>
<img src="images\14.jpg" width=100% height=300px>
</div></div></div>
<h1 align=center>Valuable Feedback</h1>
<div class="fdbk">
<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from feedback");
while($a=mysqli_fetch_array($rs))
{
    $fdbk=$a["Feedback"];
    $email=$a["EmailId"];
    $nm=$a["Name"];

    echo"<div class=\"row\"><div class='col-md-6'>";
    echo"<div class=\"thumbnail\">";
    echo"<div class=\"caption\">";
    echo"<b>$fdbk</b><br>$email<br>$nm</div></div></div>";
}
?>
</div>

<?php
 include("footer.php");
?>