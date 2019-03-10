﻿<!DOCTYPE html>

<?php
    include "../database/connectdb.php";

    $username = $_POST["username"];
    echo "Welcome, ". $username;

    $result = $connection->query("SELECT * FROM users WHERE username='$username'");

    $userid = "1";

    while($row = $result->fetch_assoc()) {
        $userid = $row["userid"];
    }

    echo "Your UserID is : ". $userid;
    $connection->query("SELECT * FROM blocks");

    $emails = json_decode(exec("python ../chain/getmail.py $userid"), true);
    //var_dump($emails);
?>

<head>
    <title>email</title>
    <link rel="stylesheet" type="text/css" href="emailStyles.css"/>
</head>
    <body>
        <div class="grid">
            <div class="header">Your Email</div>

            <div class="inbox">Inbox:

                <?php
                    foreach($emails["msg"] as $email) {
                        echo '<div class="message">';
                        echo '<p class="subject">'.$email["sub"]."</p>";
                        echo '</div>';
                    }
                ?>

            </div>
            <div class="to">
				To: <input/>
				<br/>Subject: <input/>
			</div>
            <textarea class="message"></textarea>
            <button class="send">Send</button>
        </div>
		<div class="inboxPopup">
			<div class="X">X</div>
			<?php
                    foreach($emails["msg"] as $email) {
                        echo '<div class="message">';
                        echo '<p class="subject">'.$email["sub"]."</p>";
                        echo '<p class="messageText">'.$email["msg"]."</p>";
                        echo '</div>';
                    }
            ?>
		</div>
    </body>
</html>