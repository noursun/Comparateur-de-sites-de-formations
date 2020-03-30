<! DOCTYPE html>
<html>
    <head>
        <title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="public/css/style.css" /> 
    </head>
    <body>
        <form action="index.php?action=authentification" method="POST" class="blocLogin">
            <input type="text" name="pseudo" placeholder="user" required autofocus class="inputLogin"/>
            <input type="text" name="password" placeholder="password" required class="inputLogin"/>
            <input type="submit" value="Login" class="btnLogin"/>
        </form>
    </body>
</html>
