
<html>
<head></head>
ping <br/><br/>
<?php


$server = 'localhost';
$user = 'guest';
$password = 'password';
$db = 'users';

$connection = new mysqli($server, $user, $password, $db);

if ($connection->connect_error) {
    die("Connection blew up! " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM test");

while($row = $result->fetch_assoc()) {
    echo 'name:' . $row['name'] . ' id: '. $row['number']. '<br/>';
}

?>
hi
</html>
