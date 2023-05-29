<?php
    session_start();
    $mysqli = require __DIR__ ."/connect.php";

    $sql = sprintf("SELECT iduser,nickname FROM user
            WHERE nickname = '%s'",
            $mysqli->real_escape_string($_POST["friend"]));

    $result = $mysqli->query($sql);
    $friend = $result->fetch_assoc();
    if(isset($friend)){
        $stmt = $mysqli->prepare("INSERT INTO friend (idfriend,user_iduser) values (?,?)");
        $stmt->bind_param("ss",$friend["iduser"],$_SESSION["iduser"]);
        $stmt->execute();
        $stmt->close();
        $mysqli->close();
        echo"Friend succesfully added";
        echo"<a href=/index.php>GO BACK</a>";
    }
    else{
        header("location:/index.php");
    }
?>