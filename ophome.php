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
		
	width: 80%;
	padding:60px;
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

<div class="col-sm-7" >
<ul align="right" style="list-style:none;float:right">

            <li>
			<a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $_SESSION['user']['username']; ?></a>
<small>
<i style="color: #888;"> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
<br>
</small>
<style="margin-top:10px;" ><a href="logout.php?logout" style="color:red;float:right" class="btn ">
<span style="height:5px;padding:0px; color:red" class="glyphicon glyphicon-log-out"></span> Logout</a>
</li>		
</ul>

<br/><br/><br/>
 
<p style="color:#FFFFFF; text-align:center; font-size:30px;font-text:Bernard MT Condensed;background-color:#33283E;text-decoration:blink;text-decoration:bold">

<blink><?php echo "Welcome,".'&nbsp;' .$_SESSION['user']['username']; ?> </blink> </p>

<div class="fetch_button" align="center" height="30px" > 

<a style="background-color:#7D6608;" href="ophome.php">Home</a>
<a href="displaystaff.php">view staff</a>
<a href="addstaff.php">add staff</a>
<a href="displaymembers.php">view all users</a>
<a href="addmembers.php">add user</a>
</div>
<div style=" width: 59%; font-size:40px; text-align:left; color: black;" class="center_center">

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