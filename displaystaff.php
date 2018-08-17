<?php include('functions/functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must be Administrator";
		header('location: login.php');
	}
?>
<!--head -->
<?php include('includes/head.php');?>
<!-- /head -->
<head>
<style>
	#center form {	
	width: 90%;
	padding: 5px;
	height: auto;
	background-color: #5AE0DE;
	border-radius: 5px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: medium;
	font-weight: bold;
	text-transform: capitalize;
	color: #336;
	text-align: center;
	display: block;
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
#staff_dis  table{
	   
   //overflow-y:scroll;
   height:auto;
   //display:block;
   }
#staff_dis tr{
border: 1px solid black;
color:black;
background-color: #4CAF50;
text-align: left;
margin-top: 10px;
margin-bottom: 10px;
   }
   
#staff_dis  th{
	 text-align: left;
	 color:white;
  }
  
#staff_dis th{
   padding:10px;
    color:#fff;
   
    border-bottom:3px solid #9ED929;
    background-color:#9DD929;
    background:-webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.02, rgb(123,192,67)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(158,217,41))
        );
    background: -moz-linear-gradient(
        center bottom,
        rgb(123,192,67) 2%,
        rgb(139,198,66) 51%,
        rgb(158,217,41) 87%
        );
    -webkit-border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-radius:5px 5px 0px 0px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
}
  
  
#staff_dis td{
    padding:2px;
    text-align:left;
    background-color:#DEF3CA;
    border: 2px solid #E7EFE0;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
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
<a style="background-color:#7D6608;" href="displaystaff.php">view staff</a>
<a href="addstaff.php" >add staff</a>
<a href="displaymembers.php">view all users</a>
<a href="addmembers.php">add user</a>
</div> 
<br/><br/><br/>
<div align="center" id="staff_dis">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "id2087542_search_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM users WHERE user_type!='user'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%' border=0>";
            echo "<tr bgcolor='#CCCCCC'>";
                echo "<th>Username</th>";
                echo "<th>Email</th>";
				echo "<th>User Type</th>";
				echo "<th>Update</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";                
                echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['user_type'] . "</td>";
echo "<td><a href=\"editstaff.php?id=$row[id]\">Edit</a> | <a href=\"deletestaff.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
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
