<?php
include ("include/connection.php");
SESSION_START();
if(!isset($_SESSION['username']))
{
	$_SESSION['dregistration']   = "patient";			//dregistration for department registration session
	header("Location:loginsignup.php");
}
else
{
?>

<html> 
<TITLE>Patient Registration</TITLE> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<LINK href="Patient_Registration_files/jquery-ui.css" rel="stylesheet" type="text/css" media="screen"> 
<LINK href="Patient_Registration_files/fonts7.css" rel="stylesheet" type="text/css" media="all"> 
<LINK href="Patient_Registration_files/screen7.css" rel="stylesheet" type="text/css" media="all"> 
<LINK href="Patient_Registration_files/print7.css" rel="stylesheet" type="text/css" media="print"> 
<META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<LINK href="Patient_Registration_files/responsive7.css" rel="stylesheet" type="text/css" 
media="screen"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<STYLE type="text/css" media="all">
body{
	background: #FCFCFC;
	background-size: cover;
	font-family: 'Lato',sans-serif;
	font-size: 13px;
	background-position: 50% 50%;
	margin:0px; 
}

.form_table{
	width: 650px;
	margin-left: auto;
	margin-right: auto;
	border-radius: 0;
	border: 1px solid #D9DDE2;
	background: #FFFFFF;
	background-size: cover;
	color: #36454E;
	overflow: hidden;
	box-shadow: none;
	background-position: 50% 50%;
}

.form_table a{
	color: #0D47A1;
}

.outside a{
	color: #0D47A1;
}

.form_table a:visited{
	color: #0D47A1;
}

.outside a:visited{
	color: #0D47A1;
}

.segment_header{
	width: auto;
	margin: 1px;
	color: #FFFFFF;
	background: skyblue;
	background-size: cover;
	background-repeat: repeat;
	background-position: 50% 50%;
	border-radius: 0;
}

.segment_header h1{
	border-radius: 0;
	padding: 20px 10px;
	font-family: 'Lato',sans-serif;
}

.q{
	padding: 10px;
	margin-bottom: 10px;
	margin-left: 10px;
	float: left;
	display: block;
}

.q .question{
	font-weight: bold;
}

.q .left_question_first{
	width: 15em;
}

.required .icon{
	background-image: none;
	background-position: left;
	background-repeat: no-repeat;
	font-size: 13px;
	padding-left: 14px;
}

.q .text_field{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin: 1px 0;
	padding: 10px;
}

.q .file_upload{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin-top: 1px;
	padding: 10px;
}

.q .file_upload_button{
	margin-top: 2px;
}

.q .inline_grid td{
	padding: 5px;
	vertical-align: baseline;
}

.q .drop_down{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin: 1px 0;
	padding: 9px;
}

.q .matrix th{
	color: #7A858B;
	background: #F0F2F4;
	padding: 5px;
	font-weight: bold;
	text-align: center;
	vertical-align: bottom;
}

.q .matrix td{
	padding: 5px;
	text-align: center;
	white-space: nowrap;
	height: 26px;
	border-bottom: 1px solid #D9DDE2;
	border-top: 1px solid #D9DDE2;
}

.q .matrix td.question{
	border-right: 1px solid #D9DDE2;
	font-weight: normal;
}

.q .matrix .multi_scale_sub th{
	font-weight: normal;
	border-top: 1px solid #D9DDE2 !important;
	background: #F4F6F9;
}

.q .matrix .multi_scale_break{
	border-right: 1px solid #D9DDE2;
}

.q .matrix_row_dark td{
	color: #36454E;
	background: #FCFCFC;
}

.q .matrix_row_dark td.question{
	color: #36454E;
	background: #FCFCFC;
}

.q .matrix_row_light td{
	color: #36454E;
	background: #FFFFFF;
}

.q .matrix_row_light td.question{
	color: #36454E;
	background: #FFFFFF;
}

.q .rating_ranking td{
	padding: 5px;
}

.q .scroller{
	border: 1px solid #D9DDE2;
}

.highlight{
	background: #FFF9C4              !important;
}

tr.highlight td{
	background: #FFF9C4              !important;
}

.outside{
	color: #36454E;
}

.outside_container{
	width: 650px;
	padding: 1em 0;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: #36454E;
}

.outside_container .submit_button{
	color: #FFFFFF !important;
	background: skyblue;
	background-size: auto;
	border-style: none;
	border-width: 0px;
	border-color: #FFFFFF;
	border-radius: 2px;
	text-align: center;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	font-weight: normal;
	min-width: 20%;
	padding: 10px 20px;
	text-transform: none;
	box-shadow: none;
}

.outside_container .submit_button:hover{
	background: #106AB7;
	border-color: #BBBBBB;
	background-size: auto;
}

.progressBarWrapper{
	border-radius: 0;
	background: #FFFFFF;
	background-size: cover;
	border-color: #D9DDE2;
}

.progressBarBack{
	color: #FFFFFF;
	background-color: #1795FF;
}

.progressBarFront{
	color: #36454E;
}

.ui-widget{
	font-family: 'Lato',sans-serif;
}

.invalid{
	background: #FDF1F0;
}

.invalid .invalid_message{
	color: #EC756B;
	background: #FDF1F0;
	border: 1px solid #EC756B;
	border-radius: 2px;
}

.form_table.invalid{
	border: 2px solid #EC756B;
}

.invalid .matrix .invalid_row{
	background: #FDF1F0;
}

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

</STYLE>
 
<SCRIPT src="Patient_Registration_files/jquery.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="Patient_Registration_files/jquery-ui.min.js" type="text/javascript"></SCRIPT>
 
<SCRIPT src="Patient_Registration_files/form7.js" type="text/javascript"></SCRIPT>
 
<META name="GENERATOR" content="MSHTML 11.00.10570.1001"></HEAD> 
<BODY>

<!--Header-->

<?php
if(isset($_SESSION['username']))
{
if(isset($_GET['x']))
{
	$varx=$_GET['x'];
}

	
?>
<ul>
<li><a href="moredepartments.php?a=<?php echo $varx; ?>"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode; font-size:16px;">HEALTHCARE MANTRAS</li>
  <div style="float:right;">
  
  <li style="padding:20px 16px;font-family:Lucida Sans Unicode; font-size:16px;"><?php echo $varx; ?></li>
<li>  
<div class="dropdown" style="float:right;  font-size:16px;">
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
<li><a href="moredepartments.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>

</ul>

<?php
}
if(isset($_POST['bookappointment']))
{
	$hospital=$_POST['bookappointment'];
}

if(isset($_GET['b']))
{
	$varb=$_GET['b'];
}

?>

<FORM id="FSForm" action="submit.php" method="POST">
<!-- BEGIN_ITEMS --> 
<div class="form_table">

<div class="clear"></div>

<div id="q18" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Left;"><h1 style="font-size:25px;padding:20px 1em ;">Appointment at <?php echo $varb; ?></h1></div>
</div>

<div class="clear"></div>

<div id="q19" class="q required">
<a class="item_anchor" name="ItemAnchor1"></a>
<label class="question top_question" for="RESULT_TextField-1">Patient's Name<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="name" class="text_field" id="RESULT_TextField-1" size="52" value="">
</div>

<div class="clear"></div>

<div id="q29" class="q required">
<a class="item_anchor" name="ItemAnchor10"></a>
<label class="question top_question" for="RESULT_TextField-10">Age:<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="number" class="text_field" id="RESULT_TextField-10" name="age">
</div>

<div class="clear"></div>

<div id="q26" class="q required">
<a class="item_anchor" name="ItemAnchor8"></a>
<label class="question top_question" for="RESULT_TextField-8">Phone Number<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="phone" class="text_field" id="RESULT_TextField-8" size="34" maxlength="255" value="">
</div>

<div class="clear"></div>

<div id="q27" class="q required">
<a class="item_anchor" name="ItemAnchor9"></a>
<label class="question top_question" for="RESULT_TextField-9">Email Address<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="email" name="email" class="text_field" id="RESULT_TextField-9" size="52" maxlength="255" value="">
</div>

<div class="clear"></div>

<div id="q27" class="q required">
<a class="item_anchor" name="ItemAnchor9"></a>
<label class="question top_question" for="RESULT_TextField-9">Query Or Issues<b class="icon_required" style="color:#FF0000">*</b></label>
<input type="text" name="query" class="text_field" id="RESULT_TextField-9" size="72" maxlength="550" value="">
</div>

<DIV class="clear"></DIV>
<DIV class="q required" id="q29"><A name="ItemAnchor10" class="item_anchor"></A> 
<LABEL class="question top_question" for="RESULT_TextField-10">Date of 
Appointment (YYYY-MM-DD):&nbsp;<B class="icon_required" 
style="color: rgb(255, 0, 0);">*</B></LABEL><INPUT name="date" class="text_field calendar_field" id="RESULT_TextField-10" type="date">
</DIV>
<br>
<br>
<br>
<br>
<br>
<br>
<DIV class="outside_container">
<DIV class="buttons_reverse"><INPUT type="submit" name="click" class="submit_button" id="FSsubmit" value="Submit"></DIV></DIV>
<input type="hidden" name="hd" value="<?php echo $_GET['b'];?>"/>
</FORM>
</BODY>
</HTML>

<?php

}
?>	