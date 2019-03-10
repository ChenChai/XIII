<?php
    include "../database/connectdb.php";
    $id = "test";
    $block = "hi";
    if (true === $connection->query("INSERT INTO blocks VALUES($id, $block)")) {
        echo "Block created!";
    } else {
        echo "Failed to write block!";
    }
?>