Your email has been sent! Press back to return to email.

<?php
    echo "Userid: ".$_POST["userid"];
    echo "SenderID: ".$_POST["senderid"]
    echo "Subject: ".$_POST["subject"];
    echo "Message: ".$_POST["message"];

    exec("python ../chain/sendmail.py ")
?>