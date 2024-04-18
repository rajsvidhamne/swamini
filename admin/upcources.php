<?php
include("header.php");
$cid=$_GET["courceid"];
include("../connection.php");
$q="select * from cource where courceid=$cid";
$rs=mysqli_query($cn,$q);
$nm="";
$rt="";
$du="";


if($a=mysqli_fetch_array($rs))
{
$cid=$a["courceid"];
$nm=$a['courcename'];
$rt=$a['rates'];
$du=$a['duration'];

}


?>

<style>
	body {
		color: #fff;
		background-image: url("images/img8.png");
		background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
		font-family: 'Roboto', sans-serif;
	}
	
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 390px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #19aa8d;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #179b81;
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>

<div class="signup-form">
    <form  method="post"  id=frmreg  name="myForm">
		<h2>Update Cource</h2>
		
		<hr>
        <div class="form-group">
			<div class="input-group">
				
				<input type=hidden name=txtcid value="<?php echo $cid; ?>">
			</div>
        </div>
		  <div class="form-group">
			<div class="input-group">
				
				<input type="text" class="form-control" name="crnm" placeholder="Cource Name" required="required" value="<?php echo $nm; ?>">
			  
			</div>
        </div>
        
		<div class="form-group">
			<div class="input-group">
				
				<input type="text" class="form-control" name="fee" placeholder="Fees" required="required" value="<?php echo $rt; ?>">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				
				<input type="text" class="form-control" name="duration" placeholder="Duration in days" required="required" value="<?php echo $du; ?>">
			</div>
        </div>
        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="btnsub">Update</button>
        </div>
    </form>
	
</div>





<?php

if(isset($_POST['btnsub']))
{
$cid=$_POST["txtcid"];
$nm=$_POST['crnm'];
$rt=$_POST['fee'];
$du=$_POST['duration'];

include("../connection.php");
$q="update cource set courcename='$nm',rates='$rt',duration='$du'where courceid=$cid";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Cource Details Updated Successfully');window.location='mngcource.php'</script>";
}


?>
<?php
include ("footer.php");
?>