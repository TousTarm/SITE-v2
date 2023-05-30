<?php
    session_start();
    $mysqli = require "connect.php";
    $friend = $_GET["friendnickname"];
    $sql = sprintf("SELECT iduser FROM user
            WHERE nickname = '%s'",
            $mysqli->real_escape_string($_GET["friendnickname"]));
    $result = $mysqli->query($sql);
    $friend = $result->fetch_assoc();
    $_SESSION["chatfriend"] = $_GET["friendnickname"];

    $sql = "SELECT idchat FROM friend
            WHERE user_iduser = '".$_SESSION['iduser']."' AND idfriend = '".$friend['iduser']."'";
    $result = $mysqli->query($sql);
    $idchat = $result->fetch_assoc();
    if($idchat["idchat"]%2==1){
    $_SESSION["idchat"] = $idchat["idchat"];
    }
    else{
        $_SESSION["idchat"] = $idchat["idchat"]-1;
    }
    header("Location:/index.php");
?>