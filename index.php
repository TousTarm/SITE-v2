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
    <?php require("content/bodyup1.html"); ?>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/style_index.css" rel="stylesheet">
    <?php require("content/bodyup2.html"); ?>
    <?php include "phpcon/nav.php";?>
    <?php if(isset($_SESSION["iduser"])):?>
        <?php require("phpcon/indexsi.php");?>
    <?php else: ?>
        <?php include("content/indexbody.html");?>
    <?php endif; ?>
    </body>
</html>
