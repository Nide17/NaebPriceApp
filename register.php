<?php
/*
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: loginop.php");
}

$query = $DBcon->query("SELECT * FROM opmanager WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
*/
include('functions/functions.php');
/*
	if (!isStaff()) {
		$_SESSION['msg'] = "You must log in first";
		// you must be staff js
		header('location: login.php');
	}
*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome - <?php echo $_SESSION['user']['username']; ?></title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

  <link rel="stylesheet" href="bootstrap-3.3.4/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.4/dist/js/jquery-3.2.1.min.js"></script>
  <script src="bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/Footer-with-button-logo.css">

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <style>
  .regform{
	   height:570px;
   overflow-y:scroll;
   display:block;
   }
   
    table.mytable{
	
	font-family: "Trebuchet MS", sans-serif;
    font-weight: bold;
    line-height: 1.0em;
    font-style: normal;
    border-collapse:separate;
	list-style:none;
}

  
  .mytable tr,th,td {

		text-align: left;
		width: 100%
		 
  }
  


.mytable th{
    color:#2C5755;
   text-align: left;
    border-bottom:0px solid #9ED929;
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
    -webkit-border-top-left-radius:2px;
    -webkit-border-top-right-radius:2px;
    -moz-border-radius:2px 2px 0px 0px;
    border-top-left-radius:2px;
    border-top-right-radius:2px;
}

  .mytable th {
  
    .mytable tr {
      display: block;
      position: relative;
    }
  }

 .mytable tr td{
    padding:1px;
    text-align:left;
    background-color:#DEF3CA;
    border: 1px solid #E7EFE0;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:4px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
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
<div class="row">
 <div class="col-sm-12" class="navbar navbar-inverse navbar-fixed" style="background-color:#D6EAF8 ;" id="topbar">
 
<div class="row">
<div id="topbanner">
    	<a href="index.php"><img src="images/bannerimage.png" class="img-responsive"></a>   	
 </div> </div>
<div class="row">
<div class="navbar-header">
      <a style="color:green; margin-top:10px; font-size:28px; font-family: Impact" class="navbar-brand" href="index.php">NAEB/PRICE</a>
    </div>
	
<div>
	<ul style="margin-left:32px;font-size:18px;font-family: Arial " class="nav navbar-nav">
    <li class="active" style="margin-right:64px;"> <a  style="color:#411C1C;" href="index.php"><img src="images/home1.gif"/> Home </a></li>
    <li style="margin-right:64px"> <a  style="color:#411C1C;"  href="login.php"><img src="images/login.gif"/> Login</a></li>
    <li style="margin-right:64px"> <a  style="color:#411C1C;"  href="register.php"><img src="images/add.gif"/> Add new Farmer</a></li>
	</ul>
	<ul style="margin-right:2px" class="nav navbar-nav navbar-right">
     <li>  
<form class="form-inline" role="form" action="filte.php" method="POST">
<div class="form-group">
  <img style="margin-top:14px;"  src="images/search.gif"/> <input style="margin-top:15px;" class="form-control" type="text" name="valueToSearch" placeholder="Value To Search" />
   </div>
  <input style="margin-top:15px;" class="btn btn-primary" type="submit" name="search" value="Search" />
</form>
</li>

 </ul>
</div>
 </div>
   </div>
    </div>
 <!-end header ->

 <div class="row">
<div class="col-sm-2" style="background-color:#D0D3D4;"> <img style="border: 0px;" src="images/3117.jpg" class="img-rounded" width="100%" />

<div class="table-responsive"> 
<table class="table table-hover" width="100%" border="0">
  <tr>
    <td width="70%" height="110"><img src="images/csm_DSC_0103_67bd675048.jpg" class="img-rounded" width="100%" height="100%" /></td>
    <td width="30%">&nbsp;<p>The Natural Rwanda Tea</p>&nbsp;</td>
  </tr>
  <tr>
    <td width="70%" height="97"><img src="images/download (1).jpg" class="img-rounded" width="100%" height="100%" /></td>
    <td width="30%">Coffee crop production</td>
  </tr>
  <tr>
    <td width="70%" height="94"><img src="images/images (1).jpg" class="img-rounded" width="100%" height="100%" /></td>
    <td width="30%">Flowers</td>
  </tr>
  <tr>
    <td width="70%" height="100"><img src="images/images (2).jpg" class="img-rounded" width="100%" height="100%" /></td>
    <td width="30%">Fruits &amp; Vegetables</td>
  </tr>
  <tr>
    <td width="70%" height="110"><img src="images/images (3).jpg" class="img-rounded" width="100%" height="96%" /></td>
    <td width="30%">Export Coffee</td>
  </tr>
</table>
</div>
</div>



<div class="col-sm-7" >
<ul style="float:left">
 <li style="list-style-image: url(images/db.png);text-align:left;"><a href="display.php">You can also Delete record info here:</a></li>
    </ul>
	
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

<blink> Farmer info </blink> </p>
 <form  class ="regform" method="post" action="registercon.php" name="registering" >
  


      <table class="mytable" width="90%" border="0"  bgcolor="#666666" align="center" style="font-size:16px">

         <tr align="left">
          <th width="35%" scope="row" align="left" >Farmer Province:</th>
          <td><select name="provf">
		  <option value="kigali">Kigali</option>
		  <option value="Northern">Northern</option>
		  <option value="Southern">Southern</option>
		  <option value="Eastern">Eastern</option>
		  <option value="Western">Western<option>
          </select ></td>
        </tr>
        
        <tr align="left">
          <th scope="row" align="left">	Farmer District:</th>
          <td><input id="Farmer_District" type="text" name="disf" /></td>
        </tr>
        
		<tr align="left">
          <th scope="row" align="left">	Farmer Sector:</th>
          <td><input id="Farmer_Sector" type="text" name="secf" /></td>
        </tr>
        <tr align="left">
          <th scope="row" align="left">	Farmer Cell:</th>
          <td><input id="Farmer_Cell" type="text" name="celf" /></td>
        </tr>
        <tr align="left">
          <th scope="row" align="left">	Farmer Village:</th>
          <td><input id="Farmer_Village" type="text" name="vilf" /></td>
        </tr>
        <tr align="left">
          <th scope="row" align="left">	Farmer Names:</th>
          <td><input id="Farmer_Names" type="text" name="namesf" /></td>
        </tr>
        
		<tr align="left">
          <th scope="row">Farmer Sex:</th>
          <td><select name="sxf">
		  <option value="M">Male</option>		  
		  <option value="F">Female<option>
          </select ></td>
        </tr>
		
		<tr align="left">
          <th scope="row" align="left">Farmer ID Card Number:</th>
          <td><input type="text" name="idnf"></td>
        </tr>
        
        <tr align="left">
          <th scope="row" align="left">Farmer Telephone Number:</th>
          <td><input id="Farmer_Telephone" type="text" name="phnf" </td>
        </tr>
		
		
		

         <tr align="left">
          <th scope="row">Land Province:</th>
          <td><select name="provl">
		  <option value="kigali">Kigali</option>
		  <option value="North">Northern</option>
		  <option value="South">Southern</option>
		  <option value="East">Eastern</option>
		  <option value="West">Western<option>
          </select ></td>
        </tr >
		
 <tr align="left">
          <th scope="row" align="left">	Land District:</th>
          <td><input id="Land_District" type="text" name="disl" /></td>
        </tr>
        
		<tr align="left">
          <th scope="row" align="left">	Land Sector:</th>
          <td><input id="Land_Sector" type="text" name="secl" /></td>
        </tr>
        <tr align="left">
          <th scope="row" align="left">	Land Cell:</th>
          <td><input id="Land_Cell" type="text" name="cell" /></td>
        </tr>
        <tr align="left">
          <th scope="row" align="left">	Land Village:</th>
          <td><input id="Land_Village" type="text" name="vill" /></td>
        </tr>	
		
		<tr align="left">
          <th scope="row"> Is The cultivated Land consolidated?</th>
          <td><select name="consol">
		  <option value="Yes">Yes</option>		  
		  <option value="No">No<option>
          </select ></td>
        </tr align="left">
		
		<tr align="left">
          <th scope="row" align="left">Quantity of seeds Received:</th>
          <td><input id="Quantity_seedl_Received" type="text" name="quantity"  placeholder="enter seeds quantity"/></td>
        </tr>
        
		<tr align="left">
          <th scope="row">Farmer Signature:</th>
          <td><select name="signf">
		  <option value="Yes">Yes</option>		  
		  <option value="No">No<option>
          </select ></td>
        </tr>
		
          <tr align="left">
          <th scope="row" align="left">Land Size in ha:</th>
          <td><input id="Land_Size(ha)" type="text" name="lsize"  placeholder="enter land size"/></td>
        </tr> 
        
        <tr align="left">
          <th scope="row" align="left">	Land site:</th>
          <td><input id="Land_site" type="text" name="site"  placeholder="enter site"/></td>
        </tr>
        
        <tr align="left">
          <th scope="row" align="left">Site Manager:</th>
          <td><input id="Site_Manager" type="text" name="smana"  placeholder="enter site manager"/></td>
        </tr>
        <tr align="left">
          <th scope="row">Site Manager Signature:</th>
          <td><select name="signm">
		  <option value="Yes">Yes</option>		  
		  <option value="No">No<option>
          </select ></td>
        </tr>
        
         <tr align="left">
          <th scope="row" align="left">Season:</th>
          <td><input id="Season" type="text" name="season"  placeholder="enter season"/></td>
        </tr>
        <tr align="left">
          <th scope="row" align="left">Done at Place:</th>
          <td><input id="Done at_Place" type="text" name="place"  placeholder="enter place"/></td>
        </tr>
         <tr align="left">
          <th scope="row" align="left">Done at Date:</th>
          <td><input id="Done at_Date" type="text" name="datedone"  placeholder="enter date"/></td>
        </tr>
        
        <tr align="left">
          <th scope="row" align="left">Apprvoved by (Village Secretary):</th>
          <td><input id="Apprv_Sec_Vill_Names" type="text" name="secvil"  placeholder="enter Sec_Vill_Names"/></td>
        </tr>
        <tr align="left">
          <th scope="row">Village Secretary Signature:</th>
          <td><select name="signv">
		  <option value="Yes">Yes</option>		  
		  <option value="No">No<option>
          </select ></td>
        </tr>
		
		<tr align="left">
          <th scope="row" align="left">Apprvoved by (Cell Secretary):</th>
          <td><input id="Apprv_Sec_Cell_Names" type="text" name="seccel"  placeholder="enter Sec_cell_Names"/></td>
        </tr>
        <tr align="left">
          <th scope="row">Cell Secretary Signature:</th>
          <td><select name="signc">
		  <option value="Yes">Yes</option>		  
		  <option value="No">No<option>
          </select ></td>
        </tr>
		
        	<tr align="left">
          <th scope="row" align="left">Apprvoved by (Sector Agronome):</th>
          <td><input id="Apprv_Sect_Agro_Names" type="text" name="agr"  placeholder="enter Sec_agr_Names"/></td>
        </tr>
        <tr align="left">
          <th scope="row">Sector Agronome Signature:</th>
          <td><select name="signagr">
		  <option value="Yes">Yes</option>		  
		  <option value="No">No<option>
          </select ></td>
        </tr>
		
		<tr align="left">
          <th scope="row" align="left">Code:</th>
          <td><input id="code" type="text" name="code"  placeholder="enter code"/></td>
        </tr>
		
        
        <tr align="left">
          <th scope="row">&nbsp;</th>
          <td><input class="btn btn-primary" name="Submit2" type="submit" value="Register" />
          <input class="btn btn-primary" name="Submit3" type="reset" value="Reset" /></td>
        </tr>
      </table>
    </form>
 </div>
 
  <div class="col-sm-3"  style="background-color:#D0D3D4;">

  <img src="images/logo.jpg" class="img-thumbnail" width="100%" height="204" />
  
 <table class="table table-hover" width="100%" border="0">
  <tr>
  
    <td height="200"><h3 style="text-align:center; color:#411C1C"> USEFUL LINKS</h3>
    <ul style="border-radius: 4px;">
	  <li style="list-style-image: url(images/db.png);"><a href="fetch.php">Retrieve your info here:</a></li>
	 <li style="list-style-image: url(images/web.png);"><a href="https://naebpriceweb.000webhostapp.com/newDesign/">Visit our Website for more</a></li>
    <li style="list-style-image: url(images/fb.png);"><a href="https://www.facebook.com/pages/NAEBPRICE-Project/596475677085655">Visit our Facebook Page</a></li>
  
    </ul>
    </td>
	
  </tr>
  <tr>
    <td height="256"><img src="images/Web.jpg"  class="img-rounded" align="center" width="100%" height="100%" /></td>
  </tr>
</table>
</div>
 
 </div>
  <!-end row ->
  <div class="row">
   <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"> <img src="images/3117.jpg" class="img-thumbnail"  alt="NAEB-LOGO" width="160" height="100">  </a></h2>
                </div>
                <div class="col-sm-2">
                    <h6 style="color:#411C1C">Services</h6>
                    <ul>
                        <li><a href="https://naebpriceweb.000webhostapp.com/newDesign/">ABOUT US</a></li>
                <li><a href="https://naebpriceweb.000webhostapp.com/newDesign/">CONTACT US</a></li>
                <li><a href="https://naebpriceweb.000webhostapp.com/newDesign/">TERMS OF USE</a></li>
                <li><a href="https://naebpriceweb.000webhostapp.com/newDesign/">NEWS</a></li>
              	<li><a href="https://naebpriceweb.000webhostapp.com/newDesign/">PUBLICATIONS</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h6 style="text-align:center; color:#411C1C">PRICE Operations Manager</h6>
				
        <img src="images/downloadz.jpg" class="img-responsive" />
					
                </div>
				
                <div class="col-sm-2">
                    <h6 style="text-align:center; color:#411C1C">Price production</h6>
                    
        <img src="images/fruits-and-vegetables.jpg" class="img-responsive"  />
 
                </div>
                <div class="col-sm-3">
				<button type="button" class="btn btn-default">Contact us</button>
                    <div class="social-networks">
                        
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
						<a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2018 Copyright Nide </p>
        </div>
    </footer>
</div>

</div>
</body>
</html>