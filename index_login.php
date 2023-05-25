<html>
    <head>
        <title>TousTbook</title>
    </head>
    <body>
    <?php include "html/nav.html";?>
        <h3>Log in!</h3>
            <form action="php/login.php" method="post">
                <input type="text" name="login" placeholder="nickname">
                <br>
                <input type="text" name="password" placeholder="password">
                <br>
                <input type="submit" value="send">
            </form>
    </body>
</html>