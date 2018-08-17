
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"id2087542_search_db");

?>
<?php include('functions/functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must be Administrator";
		header('location: login.php');
	}
?>
	<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {   
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // checking empty fields
    if(empty($username) || empty($name) || empty($email) || empty($password)) {                
        if(empty($username)) {
            echo "<font color='red'>username field is empty.</font><br/>";
        }
        if(empty($name)) {
            echo "<font color='red'>name field is empty.</font><br/>";
        }
        if(empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users VALUES('','$name','$username','$email','staff','$hashed_password')");
        
		echo'<script> window.location="displaystaff.php"; </script> ';
    }
}
?>
<!--head -->
<?php include('includes/head.php');?>
<!-- /head -->

<head>

<style>
.fetch_button a:link {
	
    background-color:#666;
    color:#FFC;
    padding: 8px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:5px;
}
.fetch_button  a:visited {
	color: #ABBBBD;
	  background-color:#666;
}
 .form1 {
	width: 90%;
	padding: 20px;
	height: auto;
	background-color: #5AE0DE;
	border-radius: 5px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: large;
	font-weight: bold;
	color: GreenYellow;
	text-align: left;
	margin: 10px auto;
	
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}

.fetch_button a:hover, a:active {
    background-color: red;
}
img {
	border: 1px solid #008B8B;
	border-radius: 5px;
}
img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
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



<div class="col-sm-7" >
 <ul align="right" style="list-style:none;float:right">
<li>
<a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $_SESSION['user']['username']; ?></a>

<small>
<i style="color: #888;"> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i><br>
</small>

<style="margin-top:10px;" ><a href="logout.php?logout" style="color:red;float:right" class="btn ">
<span style="height:5px;padding:0px; color:red" class="glyphicon glyphicon-log-out"></span> Logout</a>
</li>		
</ul>

<br/><br/><br/>
 
<p style="color:#FFFFFF; text-align:center; font-size:30px;font-text:Bernard MT Condensed;background-color:#33283E;text-decoration:blink;text-decoration:bold">

<blink><?php echo "Welcome,".'&nbsp;' .$_SESSION['user']['username']; ?> </blink> </p>

<div class="fetch_button" align="center" height="30px" > 

<a href="ophome.php">Home</a>
<a href="displaystaff.php">view staff</a>
<a style="background-color:#7D6608;" href="addstaff.php" >add staff</a>
<a href="displaymembers.php">view all users</a>
<a href="addmembers.php">add user</a>
</div> 

<br/><br/><br/>

 
    <form action="addstaff.php" method="post" class="form1">
        <table width="100%" border="0">
		    <tr> 
                <td style="font-size:20px;" >Name</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="text" name="name"></td>
            </tr>
            <tr> 
                <td style="font-size:20px;" >Username</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="text" name="username"></td>
            </tr>
			
            <tr> 
                <td style="font-size:20px;">Email</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;" type="email" name="email"></td>
            </tr>
            <tr> 
                <td style="font-size:20px;">Password</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;" type="password" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input class="btn btn-primary" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
	
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

