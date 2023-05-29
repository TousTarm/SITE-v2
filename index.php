<?php
    session_start();

    if(isset($_SESSION["iduser"])){
        $mysqli = require __DIR__ ."/php/connect.php";
        $sql = "SELECT * FROM user 
        WHERE iduser = {$_SESSION["iduser"]}";
        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
    }
?>

<html>
    <head>
        <title>TousTbook</title>
    </head>
    <body>
    <?php include "html/nav.html";?>
    <?php if(isset($user)):?>
        <?php require("phpcon/indexsi.php");?>
    <?php else: ?>
        <h1>WELCOME TO TOUSTBOOK</H1>
    <?php endif; ?>
    </body>
</html>
