<html>
    <head>
        <title>TousTbook</title>
    </head>
    <body>
    <?php include "html/nav.html";?>
        <h3>Sign up!</h3>
        <form action="php/signup.php" method="post">
            <input type="text" name="nickname" placeholder="nickname"><br>
            <input type="text" name="password" placeholder="password"><br>
            <input type="text" name="name" placeholder="name"><br>
            <input type="text" name="surname" placeholder="surname"><br>
            <input type="text" name="email" placeholder="email"><br>
            <input type="submit" value="send">
        </form>
    </body>
</html>