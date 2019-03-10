<?php
    include '../database/connectdb.php';
    $username = "test"; // $_POST["userName"];
    $password = "testPass"; //  $_POST["password"];

    $hashed = $password; //password_hash($password, PASSWORD_DEFAULT, array());
    $result = $connection->query("SELECT * FROM users"); // get username

    if ($result === false) {
	echo "Database Query Error: " . $mysqli->error;
    }

    $row = reset($result->fetch_assoc()); // returns first value in associative array, or false if empty

    if ($row === false) { // user not found in database.
	// attempt to create new account
        if (true === $connection->query("INSERT INTO users (username, password) VALUES('$username', '$hashed')")) {
            echo "New Account Created. Welcome, ". $username;
        } else {
            echo "Account creation failed!";
        }

    } else { // check if password good
        if ($row["password"] === $hashed) {
            // user's password correct!
            echo "Welcomed, " . $username;
        } else {
            echo "Password incorrect!";
        }
    }

?>
<html>
<br/><br/><br/>
<?php echo $_POST["userName"]; ?>
<br/> Your password was : <?php echo $_POST["password"]; ?>

</html>
