<?php
include ("include/connection.php");
SESSION_START();
?>

<html>
<head>
<title>Hospitals</title>
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

#foot
{
	border: 1px solid black;
	padding: 10px; 
	background-color:skyblue;
	border-color:#f2f2f2;
	color:#FFFFFF;
}
#foot:hover
{
	color:#333333;
	background-color:transparent; 
	border-color:#333333;
}
#backtotop
{color:#FFFFFF; background-color:skyblue;}
#backtotop{z-index:999; display:inline-block; position:fixed; visibility:hidden; bottom:20px; right:20px; width:36px; height:36px; line-height:36px; font-size:16px; text-align:center; opacity:.2;}
#backtotop i{display:block; width:100%; height:100%; line-height:inherit;}
#backtotop.visible{visibility:visible; opacity:.5;}
#backtotop:hover{opacity:1;}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin:0px; background-color:white;">

<?php

if(isset($_GET['a']))
{
	$var=$_GET['a'];
	$_SESSION['department']=$var;
}


if(isset($_SESSION['username']))
{?>
<ul>
<li><a href="departments.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>
  <div style="float:right;">
<li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;"><?php echo $_SESSION['department']; ?></li>
<div class="dropdown" style="float:right;"><a href="javascript:void(0)" class="dropbtn"><?php echo $_SESSION['username'] ?></a>
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
<li><a href="departments.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>
<div style="float:right;">
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;"><?php echo $_SESSION['department']; ?></li>
</div>

</ul>
<!--###############################################################################################-->

<?php
}?>

<?php

$sql="select * from departments where department='$_SESSION[department]' order by priority";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{?>
	<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;left:550px;">
	<h1 style="padding-top:30px;"><?php echo $row['name']; ?></h1>
	<p><?php echo $row['address']; ?></p>	
	<?php $name=$row['name']; ?>
	<footer style="padding:50px 10px 50px 500px;"><a href="patientdepartment.php?b=<?php echo $name;?> &x=<?php echo $_SESSION['department'];?>"><button type="submit" name="bookappointment" id="foot">BOOK AN APPOINTMENT</button></a></footer>
	</div>

	
	<div>
	<img src="<?php echo $row['image']; ?>"></img>
	</div>
</div>
	
<?php
}
?>

<a id="backtotop" href="#"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>


</body>
</html>