<?php
session_start();
include ("header.php");



?>
<style>
.bg-image-vertical {
  position: relative;
  overflow: hidden;
  background-repeat: no-repeat;
  background-position: right center;
  background-size: auto 100%;
}

@media (min-width: 1025px) {
  .h-custom-2 {
    height: 100%;
  }
}
</style>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="" method="post" name="f1">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
			  <label class="form-label" for="form2Example18">Email address</label>
              <input type="email" id="form2Example18" name="em" class="form-control form-control-lg" required />
              
            </div>

            <div class="form-outline mb-4">
			  <label class="form-label" for="form2Example28">Password</label>  
              <input type="password" id="form2Example28" name="pass"  class="form-control form-control-lg" required />
              
            </div>
			<br>
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit" name="btnlogin">Login</button>
            </div>
			<br>
            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="signup.php" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="images/pic3.png" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>



<!---login-->

<?php

if(isset($_POST["btnlogin"]))
{
include("connection.php");
$us=$_POST["em"];
$p=$_POST["pass"];
$q1="select * from signup where email='$us' and password='$p'";
$rs=mysqli_query($cn,$q1);
if($a=mysqli_fetch_array($rs))
{
  $_SESSION["email"]=$a["email"];
  


 echo "<script>window.location='user/index.php'</script>";
}
else
{
echo "<script>alert('Invalid username or password')</script>";
}
}
?>