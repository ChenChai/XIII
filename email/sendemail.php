<?php
    include "../database/connectdb.php";
    $id = "test";
    $block = "hi";
    $connection->query("INSERT INTO blocks($id, $block)");
?>