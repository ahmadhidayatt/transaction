<?php

$username = "root";
$password = "";
$host = "localhost";

$connector = mysql_connect($host, $username, $password)
        or die("Unable to connect");

$selected = mysql_select_db("ahmad", $connector)
        or die("Unable to connect");

?>