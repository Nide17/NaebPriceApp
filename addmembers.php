
<?php include('functions/functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
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


.fetch_button a:hover, a:active {
    background-color: red;
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
<a href="addstaff.php" >add staff</a>
<a href="displaymembers.php">view all users</a>
<a style="background-color:#7D6608;" href="addmembers.php">add user</a>
</div> 
<br/><br/><br/>
 
     <form action="addmembers.php" method="post" class="form1">
        <table width="100%" border="0">
            
			<tr> 
                <td style="font-size:20px;"  >Name</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="text" name="name" required ></td>
            </tr>
			<tr> 
                <td style="font-size:20px;"  >Username</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="text" name="username" required ></td>
            </tr>
            <tr> 
                <td style="font-size:20px;"  >Email</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="text" name="email" required ></td>
            </tr>
            <tr> 
                <td style="font-size:20px;"  >Password</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="password" name="password_1" required></td>
            </tr>
			<tr> 
                <td style="font-size:20px;"  >Re-enter Password</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px; " type="password" name="password_2" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input  class="btn btn-primary" type="submit" name="add_member" value="Add"></td>
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
