<?php session_start();?>
<?php require("content/bodyup1.html"); ?>
<link href="css/index.css" rel="stylesheet">
<link href="css/style_signup.css" rel="stylesheet">
<?php require("content/bodyup2.html"); ?>
    <?php include "phpcon/nav.php";?>
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