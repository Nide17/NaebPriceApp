<?php include('functions/functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>


<?php
// including the database connection file
$link = mysqli_connect("localhost", "root", "", "id2087542_search_db");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id']; 
    $username=$_POST['username'];
    $email=$_POST['email'];  
    $user_type=$_POST['user_type'];	
    $password=$_POST['password'];	
	$hashed_password = md5($password);
    
    // checking empty fields
    if(empty($username) || empty($email) || empty($user_type) || empty($password)) {            
        if(empty($username)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>email field is empty.</font><br/>";
        }
		if(empty($user_type)) {
            echo "<font color='red'>user_type field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>password field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($link, "UPDATE users SET username='$username',email='$email',user_type='$user_type',password='$hashed_password' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: displaymembers.php");
    }
	
	
	
}
?>
<?php
//getting id from url
if(isset($_GET['id'])){
 
//selecting data associated with this particular id
$result = mysqli_query($link, "SELECT * FROM users WHERE id=$_GET[id]");
 
while($res = mysqli_fetch_array($result))
{
	$id = $res['id']; 
    $username=$res['username'];
	$email = $res['email'];
	$user_type=$res['user_type'];
	$password = $res['password'];
  
}
}
?>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"id2087542_search_db");

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

<a href="ophome.php">Home</a>
<a href="displaystaff.php">view staff</a>
<a href="addstaff.php" >add staff</a>
<a style="background-color:#7D6608;"href="displaymembers.php">view all users</a>
<a href="addmembers.php">add user</a>
</div> 
<br/><br/><br/>

    <form class="form1" method="post" action="editmembers.php">
        <table width="100%" border="0">
		<tr> 
               
                <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
            </tr>
		
            <tr> 
                <td style="font-size:20px;">Username</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;" required type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            
            <tr> 
                <td style="font-size:20px;" >Email</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;" required type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>		
<tr>
<td style="font-size:20px;">User Type</td>
<td>
<select style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;" required type="text" name="user_type" value="<?php echo $user_type;?>">
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="admin">Admin</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="planning">Planning,  M&E staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="accounting">Accounting staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="finance">Finance staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="cooperative">Cooperatives staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="horticulture">Horticulture staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="coffee">Coffee staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="tea">Tea staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="seri">Sericulture staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="administrative">Administrative & Logistics staff</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="worker">Worker</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="farmer">Farmer</option>
<option style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;"  value="user">user</option>
</select>
</td>
</tr>

			 <tr> 
                <td style="font-size:20px;" >Password</td>
                <td><input style="width:100%; padding:10px 12px;color:#767610; border:2px solid #5AE0DE; border-radius:6px;" required type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id"	value=<?php echo $id;?>></td>
                <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
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
