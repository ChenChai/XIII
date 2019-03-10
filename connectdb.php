<?php

$server = 'localhost';
$user = 'root';
$password = 'Terrible.hack';
$db = 'users'

$connection = mysql_connect($server, $user, $password);
or die ("Failed to connect to server! \n") . mysql_error());
mysql_select_db($db);
or die ("Failed to connect to server! \n") . mysql_error());

?>