
<html>
<head></head>
ping
<?php


$server = 'chench.ai';
$user = 'guest';
$password = 'password';
$db = 'users';

$connection = new mysqli($server, $user, $password, $db);

if ($connection->connect_error) {
    die("Connection blew up! " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM test");

while($row = $result->fetch_assoc()) {
    echo 'name:' . $row['name'] . ' id: '. $row['id']. '<br/>';
}

?>
hi
</html>
