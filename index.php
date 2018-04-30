<?php
include ("include/connection.php");
SESSION_START();
?>

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
          <li><a class="btn inverse" href="about.php">ABOUT</a></li>
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
    <!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h6 class="heading"></h6>
      <p class="heading font-x3" id="1">Best Hospitals in India</p>
      <p>If you want others to be happy, practice compassion.  If you want to be happy, practice compassion</p>
    </div>
	
	
	<?php
		$sql="select * from hospitals order by priority asc limit 4";
		$result=mysql_query($sql,$con) or die(mysql_error());
		echo "<ul class='nospace group element btmspace-80'>";
		while($row=mysql_fetch_array($result))
		{
			if($row['priority']==1)
				echo "<li class='one_quarter first'>";
			else
				echo "<li class='one_quarter'>";
			?>
        <article><img src="<?php echo $row['image']?>" alt='' >
          <div class='txtwrap'>
            <h6 class='heading'><?php echo $row['name'];?></h6>
            <p><?php echo $row['address'];?></p>
            <footer><a href="moreabout2.php?a=<?php echo $row['address']; ?>">Read More</a></footer>
          </div>
		
        </article>
      </li>
    <?php
		}
		?>
	</ul>
	
    <footer class="center"><form action="morehospitals.php" method="POST"><button type="submit" name="fewmore" class="btn">FEW MORE HERE</button></form></footer>
	

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('http://www.diplomaticourier.com/wp-content/uploads/2015/09/Background-Graphics-Medical-I-72249538-960x450.jpg'); background-position:right; background-attachment:fixed;">
  <article class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <div >
      <h6 class="header nospace">A healthy attitude is contagious but don’t wait to catch it from others.</h6>
      <h6 class="header nospace">Be a carrier.</h6>
      <pre style="font-family:helvetica; text-align:right;">— Tom Stoppard</pre>
    </div>
    <!--<footer class="one_quarter"><a class="btn" href="#">Dictum a ipsum &raquo;</a></footer>
    -->
<!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle center">
      <h6 class="heading">DEPARTMENTS</h6><br>
      <pre style="font-family:helvetica; font-size:18px;">There are many hospital departments, staffed by a wide variety of healthcare professionals,
	  with some crossover between departments.</pre>
    </div>
    <ul class="nospace group element">
      <li class="one_third first">
        <article>
          <figure><img src="departments/cardiology.png" alt="">
          </figure>
          <div class="txtwrap">
            <h6 class="heading">CARDIOLOGY</h6>
            <p>This department provides medical care to patients who have problems with their heart or circulation. It treats people on an inpatient and outpatient basis.[&hellip;]</p>
            
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><img src="departments/ORTHOPAEDICS.jpg" alt="">
          </figure>
          <div class="txtwrap">
            <h6 class="heading">ORTHOPAEDICS</h6>
            <p>Orthopaedic departments treat problems that affect your musculoskeletal system. That's your muscles, joints, bones, ligaments, tendons and nerves.[&hellip;]</p>
            
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><img src="departments/GYNAECOLOGY.jpg" alt="">
          </figure>
          <div class="txtwrap">
            <h6 class="heading">Gynaecology</h6>
            <p>These departments investigate and treat problems of the female urinary tract and reproductive organs, such as endometritis, infertility and incontinence.[&hellip;]</p>
            
          </div>
        </article>
      </li>
    </ul>
	<br><br><br>
	<footer class="center"><form action="departments.php" method="POST"><button type="submit" name="fewmore" class="btn">FEW MORE HERE</button></form></footer>
	
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('http://www.digitalsignage.net/wp-content/uploads/2013/10/Healthcare-sized.jpg'); background-attachment:fixed;">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
	<img src="logo.jpg" class="hm">
      
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group">
      <div  style="padding-left:90px; margin-right:50px;">
        <h6 class="heading">Contact Details:</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Street Name &amp; Number, Town, Postcode/Zip
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      </div>
      <!--<div class="one_third">
        <h6 class="heading">Velit volutpat lobortis</h6>
        <figure><a href="#"><img class="borderedbox inspace-10 btmspace-15" src="images/demo/320x168.png" alt=""></a>
          <figcaption>
            <h6 class="nospace font-x1"><a href="#">Lacus mattis rutrum eget</a></h6>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </figcaption>
        </figure>
      </div>-->
      
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>