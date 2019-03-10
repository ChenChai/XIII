<?php   
    include "../database/connectdb.php";

    $result = $connection->query("SELECT * FROM blocks WHERE (count = (SELECT MAX(count) FROM blocks))");
    
    if (false === $result) {
        die("Failed to fetch block!");
    }

    while ($row = $result->fetch_assoc()) {
        echo $row["id"];
    }

?>