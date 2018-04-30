<?php
include ("include/connection.php");
SESSION_START();
?>
<html>
<head>
<title>About hospital</title>
<style>
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
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin:0px; background-color:white;">

<div>

<?php
if(isset($_SESSION['username']))
{?>
<ul>
<li><a href="morehospitals.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
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
  
  </div>
</ul>
<?php
}
else{
?>	
<ul>
<li><a href="morehospitals.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>

</ul>

<?php
}?>



<?php
if(isset($_GET['a']))
{
	$var=$_GET['a'];

}

$sql="select * from hospitals where address='$var'";
 $result=mysql_query($sql,$con);

 
while($row=mysql_fetch_array($result))
{
?>
<div style="margin:20px 80px; background-color:#f2f2f2; ">	
	
	<div style="position: absolute;right:200px;">
	<h1 style="padding-top:30px;"><?php echo $row['name']; ?></h1>
	<p><?php echo $row['address'] ?></p>
	<?php $_SESSION['address']=$row['address'];?>
	
	
	</div>

	
	<div>
	<img src="<?php echo $row['image']; ?>"></img>
	</div>
	<p style="padding: 10px 5px;"><?php echo $row['about']; ?></p>
</div>
	
	
	
<?php	
}
?> 
 

</body>
</html>

