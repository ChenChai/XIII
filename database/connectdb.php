
<html>
<head></head>
<?php
// connects to server
$server = 'localhost';
$user = 'guest';
$password = 'password';
$db = 'emaildb';

$connection = new mysqli($server, $user, $password, $db);

if ($connection->connect_error) {
    die("Connection blew up! " . $connection->connect_error);
}
/*
$result = $connection->query("SELECT * FROM test");

while($row = $result->fetch_assoc()) {
    echo 'name:' . $row['name'] . ' id: '. $row['number']. '<br/>';
}
*/
?>
</html>
