<?php
include("include\connection.php");
SESSION_START();
?>


<html>
<head>
  <meta charset="UTF-8">
  <title>LOGIN/REGISTER</title>
  
  
  
      <link rel="stylesheet" href="login page/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
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
ul {
    list-style-type: none;
	position:top;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #d9d9d9;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: #e6e6e6;
}

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="margin:0; background-color:#f2f2f2;">
<ul>

<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>

</ul>
  
  <div class="login-page">
  <div class="form">
    <form class="register-form" action="loginsignup.php" method="POST">
      <input type="text" placeholder="name" name="name"/>
      <input type="number" placeholder="mobile number" name="mobile"/>
      <input type="email" placeholder="email address" name="email"/>
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" name="register">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="loginsignup.php" method="POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" name="login">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="login page/js/index.js"></script>

</body>
</html>

<?php
if(isset($_POST['register']))
{
	$_SESSION['username']=$_POST['username'];
	$insert="insert into logininfo (name,username,password,type,email,mobile) values('$_POST[name]','$_POST[username]','$_POST[password]','user','$_POST[email]','$_POST[mobile]')";
	mysql_query($insert,$con);
	
	//#######################################################################################################//
	
	if(isset($_SESSION['dregistration']))			//dept for department registration session
	{
		header("Location:moredepartments.php");
	}
			
	else if(isset($_SESSION['hregistration']))			//hregistration for normal hospital registration session
	{
		header("Location:morehospitals.php");			
	}
	else
		header("Location:index.php");
	
	//#######################################################################################################//
	
	echo "Signed up successfully.";
}

if(isset($_POST['login']))
{
	
	$match="select * from logininfo where username='$_POST[username]' and password='$_POST[password]'";
	$result=mysql_query($match,$con);
	$_SESSION['username']=$_POST['username'];
	if($row=mysql_fetch_array($result))
	{	
		if($row['type']=="admin")
			header('Location:adminhome1.php');
		else
		{
			if(isset($_SESSION['dregistration']))			//dept for department registration session
			{
				header("Location:moredepartments.php");
			}
			
			else if(isset($_SESSION['hregistration']))			//hregistration for normal hospital registration session
			{
				header("Location:morehospitals.php");			
			}
			else
				header ('Location:index.php');
			
			
		}
	}
	else?> 
		<html><center><p style="color:red; font-family:Lucida Sans Unicode;">WRONG USERNAME OR PASSWORD!!</p></center></html>
<?php
}
?>