<?php
    include "../database/connectdb.php";

    // get requested id
    $id = $_POST["id"];

    $result = $connection->query("SELECT * FROM blocks where id='$id'");
    echo $result["block"];
?>