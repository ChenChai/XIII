<!DOCTYPE html>

<?php
    include "../database/connectdb.php";
    $userid = "1";
    $connection->query("SELECT * FROM blocks");

    $emails = json_decode(exec("python ../chain/getmail.py $userid"), true);
    //var_dump($emails);

    foreach($emails["msg"] as $email) {
        echo "Subject: ".$email["sub"]."<br/>";
        echo "Message: ".$email["msg"]."<br/>";
        echo "<br/>";
    }
?>

<head>
    <title>email</title>
    <link rel="stylesheet" type="text/css" href="emailStyles.css"/>
</head>
    <body>
        <div class="grid">
            <div class="header">Your Email</div>
            <div class="inbox">Inbox:</div>
            <div class="to">
				To: <input/>
				<br/>Subject: <input/>
			</div>
            <textarea class="message"></textarea>
            <button class="send">Send</button>
        </div>
    </body>
</html>