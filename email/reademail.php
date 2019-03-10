<?php
    include "../database/connectdb.php";
    $result = $connection->query("SELECT * FROM blocks");

    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " -- Block: " . $row["block"] . "<br/><br/>";
    }
?>