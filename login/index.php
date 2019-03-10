<?php
    function loginSession($username) { 
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
        session_start();
        $_SESSION["username"] = $username;
        loggedIn = true;
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

<?php
    if ($loggedIn === true) {
        echo '<form id="myForm" action="../email" method="post">';
        echo '<input type="hidden" name="username" value="'.$username.'">';
        echo '</form>';
    }
?>
<script type="text/javascript">
    document.getElementById("myForm").submit();
</script>