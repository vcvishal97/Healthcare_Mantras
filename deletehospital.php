<?php
include ("include/connection.php");
SESSION_START();

$delete="delete from hospitals where address='$_SESSION[haddress]'";
mysql_query($delete,$con);
header("Location: table.php");

?>