
<html>
<head></head>
ping
<?php


$server = 'localhost';
$user = 'root';
$password = 'Terrible.hack';
$db = 'users';

$connection = new mysqli($server, $user, $password, $db);

or die ("Failed to connect to server! \n") . mysql_error());
mysql_select_db($db);
or die ("Failed to connect to server! \n") . mysql_error());

$result = mysql_query("SELECT * FROM test");

foreach (mysql_fetch_array($result) as $row) {
    echo $row['name'] . '<br/>';
}

?>
hi
</html>
