<!DOCTYPE html>
<html>

<head>
    <title>DATING LOGIN</title>
    <script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>
    <div class="footer" style="margin-top: auto;">
        Created by Edwin, Joshua and Chen.

        <p id="welcome"></p>

        <h1>Login</h1>
        
        
        <form id="login" action="./login">
            UserName: <br/><input type="text" name="userName" id="userName"/><br/><br/>
            Password: <br/><input type="text" name="password" id="password"/><br/><br/>
            <input type="button" id="enter" value="Submit" onclick="createVariables();"/>

        </form>
    </div>
</body>
</html>