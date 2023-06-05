<?php
    require_once("connect.php");
    session_start();
    print_r($_POST);

    $stmt = $mysqli->prepare("UPDATE user SET nickname=?,name=?,surname=?,email=? WHERE iduser=?");
    $stmt->bind_param("ssssi",$_POST["nickname"],$_POST["name"],$_POST["surname"],$_POST["email"],$_SESSION["iduser"]);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    echo"it worked";
?>