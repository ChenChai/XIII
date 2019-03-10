<?php 
    include '../database/connectdb.php'; 
    $username = $_POST["userName"];
    $password = $_POST["password"];

    $hashed = password_hash($password, PASSWORD_DEFAULT, array());
    $result = $connection->query("SELECT * FROM users WHERE username='$username'"); // get username

    if (mysql_num_rows($result) === 0) { // user not found in database.
        
        if (true === $connection->query("INSERT INTO users (username, password) VALUES ('$username', '$hashed'")) {
            echo "New Account Created. Welcome, ". $username;
        } else {
            echo "Account creation failed!";
        }

    } else { // check if password good
        if ($result["password"] === $hashed) {
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
