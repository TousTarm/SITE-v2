<?php
    session_start();
    require("connect.php");
    $message = $_POST["message"];

    $stmt = $mysqli->prepare("INSERT INTO message (body,idowner,friend_idchat) VALUES (?,?,?)");
    $stmt->bind_param("sii",$message,$_SESSION["iduser"],$_SESSION["idchat"]);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    header("Location:/index.php");
?>