<?php
    function loginSession($username) { 
        $loggedIn = true;
        echo "LOGGED IN!";
        echo '<form id="myForm" action="../email/index.php" method="post">';
        echo '<input type="text" name="username" value="'.$username.'"/>';
        echo '</form>';
    }

    include '../database/connectdb.php';
    $username = $_POST["userName"];
    $password = $_POST["password"];
    $loggedIn = false;

    $hashed = password_hash($password, PASSWORD_DEFAULT, array());
    $result = $connection->query("SELECT * FROM users WHERE username='$username'"); // get username

    if ($result === false) {
	echo "Database Query Error: " . $mysqli->error;
    }

    if ($result->num_rows === 0) {
        // user not found in database.
        // attempt to create new account
        if (true === $connection->query("INSERT INTO users (username, password) VALUES('$username', '$hashed')")) {
            echo "New Account Created. Welcome, ". $username;
            loginSession($username);
        } else {
            echo "Account creation failed!";
        }
    }

    while ($row = $result->fetch_assoc()) { // returns first value in associative array, or false if empty

        if ($row === false) { 

        } else { // check if password good
            if (password_verify($password, $row["password"])) {
                // user's password correct!
                echo "Your password is correct! Welcome, " . $username;
                loginSession($username);
            } else {
                echo "Password incorrect! Please go back and try again.";
            }
        }
        break;
    }
?>

<script type="text/javascript">
    document.getElementById("myForm").submit();
</script>