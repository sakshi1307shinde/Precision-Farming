<?php
session_start();
include("header.php");
?>
 <div class="name">
<?php
if(isset($_POST['btnsub']))
{
 $usr=$_POST['usr'];
$pwd=$_POST['pwd'];
include("connection.php");
$q="select * from registration where name='$usr' and password='$pwd'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
$_SESSION['username']=$usr;
echo"<script>window.location='user/index.php'</script>";
}
else
echo"<center><b><font color=red>Incorrect username or password</font></b></center>";
mysqli_close($cn);
}
?>

<style type="text/css">


*{
  margin: 0;
  padding: 0;
 box-sizing: border-box;
 user-select: none;
}  
body{
  height: 100vh;
 
 justify-content: center;

 
}

.name{
         margin:auto auto;

         }
  #name{
        width:100%;
        height:50px;
}
.name{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  
.password{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  
.content .checkbox{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  
.field{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  
.signup-link{
        margin:auto auto;
        margin-top:30px;
        width:600px;
        color:black;
        font-size:18px;
        font-weight:700px;
}  

</style>
<form id=frmreg method="post" name="myForm">
<div class="loginpg">
<div class="row">
<marquee direction=left> <h3><b>Shetkari Producer Company's Precision Farming</b></h3></marquee>
<img src="images\14.jpg" width=100% height=300px>
</div></div></div>

<h2 align =center>Login here... </h2>
<div class="name">
  <label for="username">Name:</label>
  <input type="text" name="usr" class="form-control" id="usr" placeholder="Username" pattern="\D+" oninvalid="this.setCustomValidity('Please enter valid name')" oninput="this.setCustomValidity('')" required >
</div>
<div class="password">
  <label for="pwd">Password:</label>
  <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password"  required >
</div>
</div>
<div class="content">
<div class="checkbox">
<center> <input type ="checkbox" id="remember-me">
<label for="remember-me">Remember me</label></center>
</div>
<div class="field">
<center><a href="forget.php">Forgot Password</a></center>
</div>
<center>
<div class="field">
<button type="submit"  class="btn btn-primary" name=btnsub  id="btnsub">Login</button>
</div>
<div class="signup-link">
Not a member?<a href="signup.php">Signup now</a>
</div>
</center>
</form>


