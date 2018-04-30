<?php
define("DB_SERVER","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","vcvishal97");
define("DB_DATABASE","abc");
$con=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
mysql_select_db("abc",$con);
?>