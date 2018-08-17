<?php
/* session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: register.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
 
 $uname = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 
 $uname = $DBcon->real_escape_string($uname);
 $email = $DBcon->real_escape_string($email);
 $upass = $DBcon->real_escape_string($upass);
 
 $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
 
 $check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
 $count=$check_email->num_rows;
 
 if ($count==0) {
  
  $query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

  if ($DBcon->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
  }
  
 } else {
  
  
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";
   
 }
 
 $DBcon->close();
}
*/
 include('functions/functions.php');

	if (isLoggedIn()) {
	?>	
<script>
window.alert("Logout first");
</script>

<?php
header("Location: login.php");
	}
?>

<!--head -->
<?php include('includes/head.php');?>
<!-- /head -->
<head>
<style>
	body {
	height: auto;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
}
img {
	border: 1px solid #008B8B;
	border-radius: 5px;
}
img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

	#center form {
		
	width: 100%;
	padding:40px;
	height: auto;
	background-color: #5AE0DE;
	border-radius: 5px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: medium;
	font-weight: bold;
	color: #336;
	text-align: center;
	display: block;
	margin: 10px auto;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
		
.fetch_button a:link {
	
    background-color:#666;
    color:#FFC;
    padding: 14px 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:5px;
}
.fetch_button  a:visited {
	color: #ABBBBD;
	  background-color:#666;
}

.fetch_button a:hover, a:active {
	
    background-color: #3C0;
}

	
</style>
</head>

<body>
<div class="container">
 <!--navbar -->
    <?php include('includes/navbar.php');?>
<!-- end navbar-->

 <div class="row">
<!--left-->
    <?php include('includes/left.php');?>
<!-- end left-->

<div class="col-sm-7" id="center" >
 
<div class="signin-form">

<h1 style="text-align:center">Are you new here?</h1>
  
       <form action="signup.php" class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Sign up</h2><hr />
		<?php echo display_error(); ?>
        
        <?php
  if (isset($msg)) {
   echo $msg;
  }
  ?>     
<?php echo display_error(); ?>  
        <div class="form-group">
        <input style="background-color:#FBF8BF" type="text" class="form-control" placeholder="Enter your full name" name="name" required  />
        </div><br/>
		
        <div class="form-group">
        <input style="background-color:#FBF8BF" type="text" class="form-control" placeholder="Username" name="username" required  />
        </div><br/>
   
        <div class="form-group">
        <input style="background-color:#FBF8BF" type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div><br/>
    
		<div class="form-group">
        <input style="background-color:#FBF8BF" type="password" class="form-control" placeholder="Password" name="password_1" required  />
        </div><br/>
		
        <div class="form-group">
        <input style="background-color:#FBF8BF" type="password" class="form-control" placeholder="Confirm Password" name="password_2" required  />
        </div>
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float:center; margin-top:20px" name="register_btn">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
   </button> 
            <a href="login.php" class="btn btn-primary"  style="float:center;margin-top:20px">Log In Here</a>
        </div> 
      
      </form>
    
 </div> 
  </div> 
  
<!--right-->
    <?php include('includes/right.php');?>
<!-- end right-->
  
  </div>
 <!--footer-->
    <?php include('includes/footer.php');?>
<!-- end footer-->


</div>

</body>
</html>


