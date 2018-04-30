<?php
include ("include/connection.php");
SESSION_START();
SESSION_DESTROY();

header("Location: index.php");	
?>