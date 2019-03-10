
<?php
    // This script takes and id and block from POST and adds it to the table of blocks in the database.
    include "../database/connectdb.php";
    
    // given from python script
    $id = $_POST["id"];
    $block = $_POST["block"];

    if (true === $connection->query("INSERT INTO blocks (id, block) VALUES($id, '$block')")) {
        echo "Block created!";
    } else {
        echo "Failed to write block!";
    }
?>