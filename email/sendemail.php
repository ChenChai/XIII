<?php
    include "../database/connectdb.php";
    $id = 1;
    $block = "hi";
    if (true === $connection->query("INSERT INTO blocks (id, block) VALUES($id, '$block')")) {
        echo "Block created!";
    } else {
        echo "Failed to write block!";
    }
?>