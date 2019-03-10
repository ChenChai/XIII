<?php

$server = 'localhost';
$user = 'root';
$password = 'Terrible.hack';
$db = 'users'

$connection = mysql_connect($server, $user, $password);
or die ("Failed to connect to server! \n") . mysql_error());
mysql_select_db($db);
or die ("Failed to connect to server! \n") . mysql_error());

$result = mysql_query("SELECT * FROM test");

foreach (mysql_fetch_array($result) as $row) {
    echo $row['name'] . '<br/>';
}


?>