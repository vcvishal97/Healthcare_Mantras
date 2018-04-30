<?php
include ("include/connection.php");
SESSION_START();
?>


<!--
Template Name: Halice
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Helthcare Mantras</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('http://barusahib.org/wp-content/uploads/layerslider/home-page-slider/Backround.jpg'); background-attachment:fixed;"> 
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">Healthcare Mantras</h3>
      <p>Dedicated to the Glory of God and Those Who Serve Him.</p>
      <p class="font-x1 uppercase bold">Best of Care, Close to Home.</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="index.php">HOME</a></li>
          <li><a class="btn inverse" href="#">ABOUT</a></li>
		  <li><a class="btn inverse" href="#footer">CONTACT US</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
        <ul>
          <li><a href="#"><i class="fa fa-facebook" style="font-size:15px"></i></a></li>
		  <li><a href="#"><i class="fa fa-linkedin" style="font-size:15px"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter" style="font-size:15px"></i></a></li>
		  <li><a href="#"><i class="fa fa-github" style="font-size:15px"></i></a></li>
		  
		  
        </ul>
      </div>
      <div class="fl_right">
        <ul>
          
          <?php
		  if(!isset($_SESSION['username']))
		  {?>
			<li><a href="loginsignup.php">Login/Register</a></li>	  
		  <?php
		  }?>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Welcome!</a></h1>
    </div>
	<?php
	if(isset($_SESSION['username']))
	{
	?>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="#"><?php echo $_SESSION['username']; ?></a>
          <ul>
            <li><a href="editprofile.php">EDIT PROFILE</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </li>   
      </ul>
    </nav>
	<?php
	}
	?>
    <!-- ################################################################################################ -->
  </header>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading"></h6>
      <p class="heading font-x3" id="1">About us</p><br><br>
      <p style="font-size:20px; font-family:Lucida Sans Unicode;">Healthcare Mantras provides you the list of best hospitals in Delhi, NCR so that you could choose the best according to your need.</p>
    </div>
</div>