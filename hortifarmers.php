<?php include('functions/functions.php');

	if (!isHorticulture()) {
		$_SESSION['msg'] = "You must from Horticulture staff";
		header('location: login.php');
	}
?>
<!--head -->
<?php include('includes/head.php');?>
<!-- /head -->

<head>
<script src="jquery-3.1.1.min.js" type="text/javascript"></script>  
<script src="jquery.table2excel.min.js" type="text/javascript"></script>
		
<script type="text/javascript">  
        function exportexcel() {  
            $("#mytable").table2excel({  
                name: "Table2Excel",  
                filename: "beneficiaries_of_fruits_seedlings_season_2016_2017_e",  
                fileext: ".xls"  
            });  
        }  
</script>  
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<style type="text/css">

table{	
	font-family: "Trebuchet MS", sans-serif;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.4em;
    font-style: normal;
    border-collapse:separate;
	list-style:none;
}
table thead th{
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
table tbody td{
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
.fetch_button a:link, a:visited {
    background-color: green;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:5px;
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

<div style="background:#AAB7B8" class="row">
<div class="col-sm-2" style="background-color:lavender;">
    
    </div>
 
<div class="col-sm-7" align="center" id="center" style="width:auto;">
  
<?php

$con=mysqli_connect("localhost","root","","id2087542_search_db");
$sql = "SELECT * FROM beneficiaries_of_fruits_seedlings_season_2016_2017_e";
$result = mysqli_query($con, $sql);
?>
	
	<table id="mytable" align="center" class="table" cellpadding="2" cellspacing="2">
	
  <thead>
  <tr> 
  <th> Province</th>
  <th> District</th>
  <th> Sector</th>
  <th> Cell</th>
  <th> Village</th>
  <th> Farmer Name</th>
  <th> Id Number</th>
  <th> Phone</th>
  </tr>
  </thead>
  
  <br/><br/><br/>	
  <?php while($row=mysqli_fetch_array($result)):  ?>
  
  <tbody>
  <tr>    
  <td> <?php echo $row["Province"]; ?> </td>
  <td> <?php echo $row["District"]; ?> </td>
  <td> <?php echo $row['Sector'];?> </td>
  <td> <?php echo $row['Cell']; ?> </td>
  <td> <?php echo $row['Village']; ?> </td>
  <td> <?php echo $row['farmer_name']; ?> </td>
  <td> <?php echo $row['Id_Farmer']; ?> </td>
  <td> <?php echo $row['Tel_Farmer']; ?> </td>   
  </tr>
  
  <?php endwhile;  ?>
 </tbody>
  </table>
	<br />  
    <button onclick="exportexcel()">  
        Export to Excel</button>  	  	   
			   
  
 </div>
 
 <div class="col-sm-3" style="background-color:lavender;">
    
    </div>
	
	
 </div>
 
  <!--footer-->
    <?php include('includes/footer.php');?>
<!-- end footer-->

</div>
</body>
</html>