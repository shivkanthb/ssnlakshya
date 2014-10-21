<?php
//Give your mysql username password and database name
$mysql_host = "localhost";
$mysql_database = "newstest";
$mysql_user = "root";
$mysql_password = "";
$con=mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_select_db($mysql_database,$con);
?>