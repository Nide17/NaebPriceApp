<?php
/*
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
 header("Location: membershome.php");
 exit;
}

if (isset($_POST['btn-login'])) {
 
 $email = strip_tags($_POST['email']);
 $password = strip_tags($_POST['password']);
 
 $email = $DBcon->real_escape_string($email);
 $password = $DBcon->real_escape_string($password);
 
 $query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // if email/password are correct returns must be 1 row
 
 if (password_verify($password, $row['password']) && $count==1) {
  $_SESSION['userSession'] = $row['user_id'];
  header("Location: membershome.php");
 } else {
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
 }
 $DBcon->close();
}
*/
include('functions/functions.php');

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
	padding:90px;
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


<div class="col-sm-7" id="center"  align="center" >
<div class="signin-form">

 <h1 style="color:#411C1C">Please login first</h1><br />
  <?php
  if(isset($msg)){
   echo $msg;
  }
  ?>
    
    <form method="post" action="login.php" class="form-signin"  id="register-form">
	
	<?php echo display_error(); ?>
	
	<h2 style="color:#411C1C" class="form-signin-heading">Sign in</h2><hr /><br /><br /> 
	<div class="form-group">
        <input style="background-color:#FBF8BF" type="email" class="form-control" placeholder="Email address" name="email" required  />
        </div><br/>
		
		<div class="form-group">
        <input style="background-color:#FBF8BF" type="password" class="form-control" placeholder="Enter Password" name="password" required  />
        </div><br/>
<hr /> 

           <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float:center; margin-top:20px" name="login_btn" id="btn-login">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign in
   </button> 
			<a href="signup.php" class="btn btn-primary"  style="float:center;margin-top:20px">Sign up here</a>
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