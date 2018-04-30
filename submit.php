<?php
include ("include/connection.php");
SESSION_START();
?>

<html>
<head>
<title>Submitted</title>
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
	padding: 10px 20px; 
	background-color:skyblue;
	border-color:#f2f2f2;
	color:#FFFFFF;
}
#foot:hover
{
	color:skyblue;
	background-color:white; 
	border-color:skyblue;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin:0px; background-color:white;">

<?php
if(isset($_SESSION['username']))
{?>
	<ul>
	<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
	<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>
	<div style="float:right;">
	<li>
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

//#####################################################################

if(isset($_POST['click']))
{


	$insert="insert into appointments (name,age,phone,email,hospital,query,date) values ('$_POST[name]','$_POST[age]','$_POST[phone]','$_POST[email]','$_POST[hd]','$_POST[query]','$_POST[date]')";
	if(mysql_query($insert,$con))
	{?>
	
	<div style="margin-left:auto; margin-right:auto;margin-top:150px; background-color:#f2f2f2; height:200px; width:400px;">
	<p style="padding:80px 0px 0px 150px;">Submitted!!</p>
	<footer style="padding-left:166px;"><a href="index.php"><button type="submit" id="foot">OK</button></a></footer>
	</div>
	
	<?php
	}
	else
	{
		echo "Error";	
	}
}
?>

</body>
</html>
