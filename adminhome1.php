<?php
include ("include/connection.php");
SESSION_START();
?>
<html>
<head>
<style>
ul {
    list-style-type: none;
	position:top;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #c4e3ed;
}

li {
    float: left;
}

li a, .dropbtn {
	font-family:Lucida Sans Unicode;
    display: inline-block;
    color: black;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #ebf6f9;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
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

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

#thought{
	font-family:monotype corsiva;
	color:#1a1a1a;
		font-size:40px;
		text-align:right;
		margin-right:49px;
		margin-top:190px;
}
 

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body  style=" background-image:url(images/admin1.jpg); background-repeat: no-repeat; background-attachment:fixed; margin:0px;">

<ul>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>
  <div style="float:right;">
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">HOSPITALS</a>
    <div class="dropdown-content">
      <a href="table.php">AVAILABLE</a>
      <a href="Admin Form1.php">ADD NEW</a>
    </div>
	<li><a href="logout.php">LOGOUT</a></li>
  </li>
  </div>
</ul>
<p align="right" style="font-size:20px;font-family:Lucida Sans Unicode;"><?php echo $_SESSION['username'] ?></p>
<pre id="thought">
You Cannot Heal A Lifetime Of Pain Overnight,
Be Patient With Yourself,It Takes As Long As
It Takes To Rebuild Yourself.
</pre> 

</body>
</html>
