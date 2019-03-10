<!DOCTYPE html>

<?php
    include "../database/connectdb.php";
    $userid = "1";
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
                        echo '<p class="messageText">'.$email["msg"]."</p>";
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
    </body>
</html>