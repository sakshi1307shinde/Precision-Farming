<html><head><style> 


*{
  margin: 0;
  padding: 0;
}
    

.img{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  
.for{
        margin:auto auto;
        margin-top:20px;
        width:600px;
        color:black;
        font-size:15px;
        font-weight:100px;
}  

</style></head></html>




<?php
session_start();
include("header.php");
?>
<div class="img">
<div class="row">
<div class='col-sm-12'>
<marquee direction=left> <h3><b>Shetkari Producer Company's Precision Farming</b></h3></marquee>
<img src="images\14.jpg" width=100% height=300px>
</div></div></div></div>
<h1 align="center">Recover password Here</h1>
<div class="for">
<form id=frmreg method="post" name="myForm">
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input ng-model="unm" id="unm" type="text" class="form-control" name="unm" placeholder="UserName" required>
  </div>

<br>

<br>
        <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>

</form>

<?php
if(isset($_POST['btnsub']))
{
$unm=$_POST['unm'];
include("connection.php");
$q="select * from registration where name='$unm'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
 $secque=$a["securityques"];
 ?>
<form method=post>
<input type=hidden name=textun class=form-control value="<?php echo $unm; ?>"><br>
<input type=text class=form-control name=secque value="<?php echo $secque; ?>" readonly><br>
<input type=text class=form-control name=secans value=""><br>
<input type=submit name=btns value="Submit">
</form>
<?php


}
mysqli_close($cn);
}
?>

<?php
if(isset($_POST["btns"]))
{

  $unm=$_POST['textun'];
  $secque=$_POST["secque"];
$secans=$_POST["secans"];
include("connection.php");
$q="select * from registration where name='$unm' and securityques='$secque' and securityanswer='$secans'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
 $answer=$a["Password"];
echo "<h2><font color=green><b>Your password is $answer</b></font></h2>";
}
}
?>
</div>


<?php
include("footer.php");

?>