<?php
include ("include/connection.php");
SESSION_START();
?>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>


<style>
table 
{
	right:0;
}
.stdhead
{
		font-family:Lucida Sans Unicode;
	
	text-align: left;
}
.stdrow
{
		font-family:Lucida Sans Unicode;
	padding: 5px 10px;
	
	text-align: left;
}
.stdr
{	
	font-family:Lucida Sans Unicode;
	padding: 5px 10px;
	padding-left:10px;
}

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
    display: inline-block;
	font-family:Lucida Sans Unicode;
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


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body style=" background-image:url(images/admin1.jpg); background-repeat: no-repeat; margin:0px;">

<ul>
<li></li>
<li><a href="adminhome1.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
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

<p align="right" style="font-size:19px;font-family:Lucida Sans Unicode;"><?php echo $_SESSION['username'] ?></p>


<?php



$sql="select * from hospitals order by priority";
$result=mysql_query($sql,$con) or mysql_error();
?>
<center>
<table>
  
    <tr class="stdhead">
	  
		<th class="stdr">Name</th>
      <th class="stdr">Address</th>
      <th class="stdr">Priority</th>
	  <th>   </th>
    </tr>
	
<?php
while($row=mysql_fetch_array($result))
{
?>

    <tr class="stdrow">
      
      <td class="stdr"><?php echo $row['name']?></td>
      <td class="stdr"><?php echo $row['address']?></td>
	  <td class="stdr"><?php echo $row['priority']?></td>
	  <?php $_SESSION['haddress']=$row['address']; ?>
	  <td class="stdr"><a href="deletehospital.php"><i class="fa fa-trash-o" style="font-size:24px;padding-left:10px; color:black"></i></a></td>
    </tr>
 	
<?php
}
?>



</table>
</center>

</body>
</html>

