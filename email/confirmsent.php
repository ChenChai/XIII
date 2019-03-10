Your email has been sent! Press back to return to email.

<?php

    echo "Userid: ".$_POST["userid"];
    echo "SenderID: ".$_POST["senderid"];
    echo "Subject: ".$_POST["subject"];
    echo "Message: ".$_POST["message"];

    $from =  $_POST["senderid"];
    $to =  $_POST["userid"];
    $subject = base64_encode($_POST["subject"]);
    $message = base64_encode($_POST["message"]);

    exec("python ../chain/sendmail.py ".$from." ".$to." ".$subject." ".$message);
?>