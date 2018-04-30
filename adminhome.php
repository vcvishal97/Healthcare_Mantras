<html>
<head>
<title>Admin</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#header{
	position:fixed;
	top:0;
	left:0;
	right:0;
	padding:18px;
	background-color:lightskyblue;
	backgroung-attachment:fixed;
}
td,th{
	font-family:helvetica;
	font-size:32px;
}
table{
	margin-left:20px;
}
#home{
	padding-left:900px;
}
#a{
color:black;
}
#main{
	margin-top:81px;
}

#thought{
	font-family:monotype corsiva;
	color:white;
		font-size:40px;
		text-align:right;
		margin-right:49px;
		margin-top:390px;
}

.dropbtn {
    background-color: lightskyblue;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	font-size:25px;
}

.dropbtn:hover, .dropbtn:visited {
    background-color: white;
	color:black;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	font-size:20px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: lightskyblue; color:black;}

.show {display:block;}

#logout{
	text-decoration:none;
	color:black;
}
</style>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
<body>
<div id ="header">
<header>
<table>
<th>
Welcome!
</th>
<td id="home">
<button class="dropbtn"><a href="#" id="a"><i class="fa fa-home">Home</i></a></button>
</td>
<td>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Hospitals</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="table.php">Available</a>
    <a href="Admin-form\Admin Form.html">Add New</a>
  </div>
</div>
</td>
<td>
<button class="dropbtn"><a href="#" id="logout">Logout</a></button>
</td>
</table>
</header>
</div>
<div id="main">
<pre id="thought">
You Cannot Heal A Lifetime Of Pain Overnight,
Be Patient With Yourself,It Takes As Long As
It Takes To Rebuild Yourself.
</pre> 
<img src="https://ak6.picdn.net/shutterstock/videos/4771400/thumb/1.jpg" height="646px" width="1520px" style="z-index:-1; position:fixed; top:100;">
</div>
</body>
</html>