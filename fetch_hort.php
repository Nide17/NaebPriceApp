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
<style>

.fetch_button a:link, a:visited {
    background-color: green;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:5px;
}
img {
	border: 1px solid #008B8B;
	border-radius: 5px;
}
img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}


.fetch_button a:hover, a:active {
    background-color: red;
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

<div  class="col-sm-7" >

<div align="center"> 
<br/><br/><br/>
<h1 style="color:#1B4F72;" >Horticulture info</h1>

</div>
<br/><br/><br/>

<div align="center"  id="center">

<form style="background:#D0F8F7; width:100%; border-radius:10px" name="provdis" action="display_hort.php" method="POST">   

<br/><h3>SELECT YOUR LOCATION INFO OPTION HERE</h3><br/>

<table style="background:#D0F8F7; width:80%; font-size:17px"  >
<tr>
<td style="background:#D0F8F7 ; width: 40%; border-radius: 3px;">Select Province</td>
<td><select style="padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;" name="province" id="provinced" onChange="change_province()">
<option style="text-align:center;"> --Click to Select an option-- </option>
<?php
$res=mysqli_query($db,"select * from province");
while($row=mysqli_fetch_array($res))
{
?>
<option value="<?php echo $row["prov_id"];  ?>"> <?php echo $row["prov_name"];  ?> </option>
<?php	
}
?>
</select>
</td>
</tr>
<tr>
<td style="background:#D0F8F7 ; width: 40%; border-radius: 3px;">Select District</td>
<td>

<div id="district">
<select style="padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;" name="district">
<option name="district">--Click to Select an option-- </option>
</select>
</div>
</td>
</tr>

<tr>
<td style="background:#D0F8F7 ; width: 40%; border-radius: 6px;">Select Sector</td>
<td>
<div id="sector">
<select style="padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;" name="sector">
<option name="sector">--Click to Select an option--  </option>
</select>
</div>
</td>
</tr>

<tr>
<td style="background:#D0F8F7 ; width: 40%; border-radius: 6px;">Select Cell</td>
<td>
<div id="cell">
<select style="padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;" name="cell">
<option> --Click to Select an option--  </option>
</select>
</div>
</td>
</tr>

<tr>
<td style="background:#D0F8F7 ; width: 40%; border-radius: 6px;">Select Village</td>
<td>
<div id="village">
<select style="padding:10px 12px; background-color:#EAEDED; width: 100%; border-radius: 6px; border:2px solid #F9F904;" name="village">
<option> --Click to Select an option-- </option>
</select>
</div>
</td>
</tr>

<tr align="left">
   <td>&nbsp;</td>
   <td style="float:right"></td>
</tr>
<tr>
   
<td style="float:right"><input class="btn btn-primary" name="submit2" type="submit" value="Fetch" /></td>
      <td > <input style="float:right" class="btn btn-primary" name="Submit3" type="reset" value="Reset" /></td>
</tr>
<tr align="left">
   <td>&nbsp;</td>
   <td style="float:right"></td>
</tr>
	  
</table>
</form>
</div>

<script type="text/javascript"> 
function change_province(){
	
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","pajax.php?province="+document.getElementById("provinced").value,false);
    xmlhttp.send(null);
    document.getElementById("district").innerHTML=xmlhttp.responseText;
	
	}
	
	function change_district(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","pajax.php?district="+document.getElementById("districtd").value,false);
    xmlhttp.send(null);
    document.getElementById("sector").innerHTML=xmlhttp.responseText;
	}
	
	
	function change_sector(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","pajax.php?sector="+document.getElementById("sectord").value,false);
    xmlhttp.send(null);
    document.getElementById("cell").innerHTML=xmlhttp.responseText;
   
	}
	
	function change_cell(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","pajax.php?cell="+document.getElementById("celld").value,false);
    xmlhttp.send(null);
    document.getElementById("village").innerHTML=xmlhttp.responseText;
   
	}
	
</script>

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