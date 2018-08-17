 <!--navbar -->

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

	<ul style="margin-left:32px;font-size:18px;font-family: Arial " class="nav navbar-nav">
    <li class="active" style="margin-right:64px;"> <a  style="color:#411C1C;" href="index.php"><img src="images/home1.gif"/> Home </a></li>
	
    <?php
        if(!isset($_SESSION['user'])){
        ?>
	<li style="margin-right:64px"> <a  style="color:#411C1C;"  href="login.php"><img src="images/login.gif"/> Login</a></li>
	<?php }else{ ?>
          <li style="margin-right:auto">
            <a style="color:#D4AC0D;"  href="logout.php?logout"> <img src="images/login.gif"/>
			<li><?php echo $_SESSION['user']['username']; ?><br/><small style="color:red;" >Logout</small></li></a>
          </li>
        <?php } ?>
	
	
    <li style="margin-left:64px"> <a  style="color:#411C1C;"  href="signup.php"><img src="images/add.gif"/> Sign up</a></li>
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
	 <!--end navbar -->