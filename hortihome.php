
<?php include('functions/functions.php');

	if (!isHorticulture()) {
		$_SESSION['msg'] = "You must from Horticulture staff";
		header('location: login.php');
	}
?>

<?php
if(isset($_POST['hortisearch'])){
	
	$valueToSearch=$_POST['valueToSearch'];
	$sql = "SELECT * FROM beneficiaries_of_fruits_seedlings_season_2016_2017_e WHERE CONCAT(farmer_name,Id_Farmer,Tel_Farmer) LIKE '%" . $valueToSearch . "%'";
	$search_result= filterTable($sql);
}
else{
	$sql="SELECT * FROM `beneficiares_coffee_seeds` ";
	$search_result= filterTable($sql);
}
function filterTable($sql){

$connect=mysqli_connect("localhost","root","","id2087542_search_db");
$filter_Result=mysqli_query($connect,$sql);
return $filter_Result;
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


    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
	
	</style>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>

<body>

<div class="container">
 <!--navbar -->
    <?php include('includes/navbar.php');?>
<!-- end navbar-->

 <div class="row"> 

<div class="col-sm-12" >
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

<blink><?php echo "Welcome,".'&nbsp;' .$_SESSION['user']['name']; ?> </blink> </p>

<div class="fetch_button" align="center" height="30px" > 

<a style="background-color:#7D6608;" href="hortihome.php">Home</a>
<a href="hortifarmers.php">view Farmers</a>
<a href="#">add farmer</a>
<a href="fetch_hort.php">view info</a>
</div>

<div style="font-size:40px; text-align:left; color: black;" class="center_center">
<br/>
	
 <ul >
	  <li style="list-style-image: url(images/db.png);"><a href="fetch_hort.php">Horticulture info</a></li>
 </ul>
 <form action="hortihome.php" method="POST">
 <div class="search-box">
        <input class="form-control" type="text" name="valueToSearch" autocomplete="off" placeholder="Search farmer info here ..." />
		
		<input style="margin-top:15px;" class="btn btn-primary" type="submit" name="hortisearch" value="Search" />
        <div class="result"></div>
    </div>
	</form>	<br><br>
	
<div class="row">
<div class="col-sm-12" style="background-color:#F4F6F6;">
<?php if(isset($valueToSearch)){ ?>
	
 <table class="table"> 
  <tr style="background-color:#D5F5E3;">
  <th> Province</th>
  <th> District</th>
   <th> Sector</th>
    <th> Cell</th>
     <th> Village</th>
	  <th> Names</th>
	   <th> Sex</th>
	    <th> Identity</th>
		<th> Telephone</th>
  </tr>
  
  <?php while($row=mysqli_fetch_array($search_result)):  ?>
  
  <tr>    
  <td> <?php echo $row['Province'] ; ?> </td>
  <td> <?php echo $row['District'] ;      ?> </td>
   <td> <?php echo $row['Sector']; ?> </td>
    <td> <?php echo $row['Cell']; ?> </td>
	 <td> <?php echo $row['Village']; ?> </td>
	  <td> <?php echo $row['farmer_name']; ?> </td>
	   <td> <?php echo $row['Sexe']; ?> </td>
	    <td> <?php echo $row['Id_Farmer']; ?> </td>
		 <td> <?php echo $row['Tel_Farmer']; ?> </td>
	   
  </tr>
  
  <?php endwhile;  ?>
  
  </table>
  
  <?php }
else{
	echo "Please search using for name, ID or phone number!";
	
	}

 ?>
 </div>
  </div>
  <!-end result row ->
  <br><br><br>
  
	
  </div>  
  
</div>

 </div>
  <!--footer-->
    <?php include('includes/footer.php');?>
<!-- end footer-->
</div>
</body>
</html>