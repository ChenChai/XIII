<?php
    include "../database/connectdb.php";

    // get requested id
    $id = $_POST["id"];

    $result = $connection->query("SELECT * FROM blocks WHERE id='$id'");

    if (false === $result) {
        die("Failed to fetch block!");
    }

    while ($row = $result->fetch_assoc()) {
        echo $row["block"];
    }
?>