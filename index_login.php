<?php
require "php/connect.php";
$is_valid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ ."/php/connect.php";

    $sql = sprintf("SELECT * FROM user
            WHERE nickname = '%s'",
            $mysqli->real_escape_string($_POST["nickname"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user){
        if ($_POST["password"] == $user["password"]){
            session_start();
            $_SESSION["iduser"] = $user["iduser"];
            header("Location: index.php");
        }
    }
    $is_valid = true;
}

?>
<html>
    <head>
        <title>TousTbook</title>
    </head>
    <body>
    <?php include "html/nav.html";?>
        <h3>Log in!</h3>
            <form action="" method="post">
                <input type="text" name="nickname" placeholder="nickname">
                <br>
                <input type="text" name="password" placeholder="password">
                <br>
                <input type="submit" value="send">
            </form>
            <?php if ($is_valid == true) { echo "<p>invalid login</p>";}?>
    </body>
</html>