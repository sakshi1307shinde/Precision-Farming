<?php
include("header.php");
?>
<style type="text/css">

*{
  margin: 0;
  padding: 0;
}
body{
   background-image:url(images/14.jpg);
   background-position:center;
   background-size:cover;
   font-family:sans-serif;
    margin: auto auto;
 
}
    
.signupform{
            width:700px;
           background-color:rgb(0,0,0,5);
          margin: auto auto;
          color:#FFFFFF;
           padding:10px 0px 10px 0px;
         text-align:center;
         border-radius:15px 15px 0px 0px;
}
.main{
         background-color:rgb(0,0,0,0,5);
          width: 0px auto 0px auto; 
         margin:auto;
}
.form{
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
        color:white;
        font-size:18px;
        font-weight:700px;
}
.address{
        
         margin:auto auto;
        margin-top:30px;
        width:600px;
        color:white;
        font-size:18px;
        font-weight:700px;
}  
.contact{
     margin:auto auto;
        margin-top:30px;
        width:600px;
        color:white;
        font-size:18px;
        font-weight:700px;
}
.email{
 margin:auto auto;
        margin-top:30px;
        width:600px;
        color:white;
        font-size:18px;
        font-weight:700px;
}
.password{
   margin:auto auto;
        margin-top:30px;
        width:600px;
        color:white;
        font-size:18px;
        font-weight:700px;
}
.securityquestion{
  margin:auto auto;
        margin-top:30px;
        width:600px;
        color:white;
        font-size:18px;
        font-weight:700px;
}


 </style>

<div class="signupform"><h1>Sign In Here.... </h1></div>
<div class="main">
<form id=frmreg method="post" name="myForm">

<div class="name">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" pattern="\D+" oninvalid="this.setCustomValidity('Please enter valid name')" oninput="this.setCustomValidity('')" required name="nm"  >
  </div>
 <div class="address">
    <label for="text"> Address:</label>
    <textarea class="form-control" id="address" placeholder="Enter Your Address" required name="address">
</textarea>
  </div>
<div class="contact">
    <label for="contact">Contact:</label>
    <input type="contact" class="form-control" id="contact" placeholder="Enter Your Contact No" pattern="\d{10}" oninvalid="this.setCustomValidity('Please enter valid contact no')" oninput="this.setCustomValidity('')" required name="contact">
  </div>
  <div class="email">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" oninvalid="this.setCustomValidity('Please enter valid Email')" oninput="this.setCustomValidity('')"   required name="email">
  </div>
  <div class="password">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter Your Password"  required name="pwd">
</div>
<div class="security question">
            <label for="securityquestion">Security Questions</label>
<div class="securityquestion">
<div class="column">
              <div class="select-box">
                <select name="secque">


                  <option hidden >-------Select the question-------</option>
                  <option>What is name of your favourite movie?</option>
                  <option>In which city you born?</option>
                <option>What high school did you attend?</option>
                  <option>What was the name of your favourite car/bike?</option>
                  <option>What is your most favourite hobby?</option>
                  <option>What is your favourite food?        </option>
                  <option>Where you born?</option>
                  <option>Which city do you like?</option>
            <div class="column">
          <div class="input-box">
</div>

</div>
</select>
<div class="security answer">
    <label for="pwd">Security Answer:</label>
    <input type="seqans" class="form-control" id="seqans" placeholder="Enter Security answer" required name=secans>

          </div>
        </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
<center>
  <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub><h4>Submit</h4></button>
<button type="reset" class="btn btn-danger" id="btnre" name=btnre><h4>Reset</h4></button>

</form>

</center>

</div>

<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
extract($_POST);
include("connection.php");
$q="insert into registration values('$nm','$address','$contact','$email','$pwd','$secque','$secans')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Registration Successful');window.location='login.php'</script>";
}

?>