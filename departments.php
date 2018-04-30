<?php
include ("include/connection.php");
SESSION_START();
?>



<html>
<head>
<title>Departments</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<style>
a
{
	text-decoration:none;
}
h1,p
{
	font-family:Lucida Sans Unicode;
}
ul {
    list-style-type: none;
	position:top;
    
    padding: 0;
    overflow: auto;
    background-color: #d9d9d9;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
	font-family:Lucida Sans Unicode;
    color: black;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #e6e6e6;
}

li.dropdown {
	position: relative;
    display: inline-block;
}

.dropdown-content {
	  display: none;
    position: absolute;
    right: 0;
    
    
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	
	
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
	
	background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
	
    display: block;
}
#backtotop
{color:#FFFFFF; background-color:skyblue;}
#backtotop{z-index:999; display:inline-block; position:fixed; visibility:hidden; bottom:20px; right:20px; width:36px; height:36px; line-height:36px; font-size:16px; text-align:center; opacity:.2;}
#backtotop i{display:block; width:100%; height:100%; line-height:inherit;}
#backtotop.visible{visibility:visible; opacity:.5;}
#backtotop:hover{opacity:1;}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<body style="margin:0px; background-color:white;">

<?php
if(isset($_SESSION['username']))
{?>
<ul>
<li><a href="index.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>
  <div style="float:right;">
  
  
<li>  
<div class="dropdown" style="float:right;">
<a href="javascript:void(0)" class="dropbtn"><?php echo $_SESSION['username'] ?></a>
  <div class="dropdown-content">
    <a href="editprofile.php">EDIT PROFILE</a>
    <a href="logout.php">LOGOUT</a>
  </div>
</div>
</li>
</ul>
<?php
}
else{
?>	
<ul>
<li><a href="index.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>

</ul>

<?php
}?>


<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">CARDIOLOGY</h1>
	<pre style="font-family:Lucida Sans Unicode">This department provides medical care to patients who have problems 
with their heart or circulation. It treats people on an inpatient and outpatient basis.</pre>
	
	<p><a href="moredepartments.php?a=CARDIOLOGY">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\cardiology.png" style="padding-right:50px;"></img>
	</div>
</div>
	

	<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">ORTHOPAEDICS</h1>
	<pre style="font-family:Lucida Sans Unicode">Orthopaedic departments treat problems that affect your musculoskeletal system. 
That's your muscles, joints, bones, ligaments, tendons and nerves.</pre>
	
	<p><a href="moredepartments.php?a=ORTHOPAEDICS">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\ORTHOPAEDICS.jpg" style="padding-right:50px;"></img>
	</div>
</div>

<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">GYNAECOLOGY</h1>
	<pre style="font-family:Lucida Sans Unicode">These departments investigate and treat problems of the female urinary tract and 
reproductive organs, such as endometritis, infertility and incontinence.</pre>
	
	<p><a href="moredepartments.php?a=GYNAECOLOGY">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\GYNAECOLOGY.jpg" style="padding-right:50px;"></img>
	</div>
</div>

<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">ENT</h1>
	<pre style="font-family:Lucida Sans Unicode">The ENT department provides care for patients with a variety of problems related to
Ear, Nose and Throat.</pre>
	
	<p><a href="moredepartments.php?a=ENT">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\ENT.jpg" style="padding-right:50px;"></img>
	</div>
</div>

<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">GASTROENTEROLOGY</h1>
	<pre style="font-family:Lucida Sans Unicode">The branch of medicine which deals with disorders of the stomach and intestines.
</pre>
	
	<p><a href="moredepartments.php?a=GASTROENTEROLOGY">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\Gastroenterology.jpg" style="padding-right:50px;"></img>
	</div>
</div>

<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">NEUROLOGY</h1>
	<pre style="font-family:Lucida Sans Unicode">This unit deals with disorders of the nervous system, including the brain and spinal 
cord. It's run by doctors who specialise in this area (neurologists) and their staff.</pre>
	
	<p><a href="moredepartments.php?a=NEUROLOGY">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\Neurology.jpg" style="padding-right:50px;"></img>
	</div>
</div>

<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">RADIOTHERAPY</h1>
	<pre style="font-family:Lucida Sans Unicode">Run by a combination of consultant doctors and specially trained radiotherapists, 
this department provides radiotherapy (X-ray) treatment for conditions such as 
malignant tumours and cancer.</pre>
	
	<p><a href="moredepartments.php?a=RADIOTHERAPY">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\Radiotherapy.jpg" style="padding-right:50px;"></img>
	</div>
</div>

<!-- ###################################################################################-->

<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;">UROLOGY</h1>
	<pre style="font-family:Lucida Sans Unicode">The urology department is run by consultant urology surgeons and their surgical 
teams. It investigates all areas linked to kidney and bladder-based problems.</pre>
	
	<p><a href="moredepartments.php?a=UROLOGY">HOSPITALS</a></p>
	</div>

	
	<div>
	<img src="departments\Urology.jpg" style="padding-right:50px;"></img>
	</div>
</div>


<a id="backtotop" href="#"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>


</body>
</html>