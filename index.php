<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

    <body>
        <div class="container">
            <p id="welcome"></p>

            <h1>Login</h1>


            <form id="login" action="./login/index.php" method="post">
                UserName: <br /><input type="text" name="userName" id="userName" /><br /><br />
                Password: <br /><input type="text" name="password" id="password" /><br /><br />
                <input type="submit" id="enter" value="Submit" />

            </form>

            <div class="footer"><br />Created by Edwin, Joshua and Chen.</div>
        </div>
    </body>
</html>
