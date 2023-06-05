<?php
    require_once("connect.php");
    session_start();

    $stmt = $mysqli->prepare("UPDATE user nickname=?,name=?,surname=?,email=? WHERE iduser='".$_SESSION["iduser"]."'");
    $stmt->bind_param("ssss",$_SESSION["nickname"],$_SESSION["name"],$_SESSION["surname"],$_SESSION["nicemailkname"]);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    echo"it worked";
?>