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

<div style="font-size:40px; text-align:left; color: black;" class="center_center">

 <ul >
	  <li style="list-style-image: url(images/db.png);"><a href="fetch_hort.php">Horticulture info</a></li><br/>
	  <li style="list-style-image: url(images/db.png);"><a href="provdis1.php">Coffee info</a></li><br/>
	   <li style="list-style-image: url(images/db.png);"><a href="fetch.php">Tea info</a></li><br/>
	    <li style="list-style-image: url(images/db.png);"><a href="fetch.php">Sericulture info</a></li><br/>
    </ul>
    
</div>
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