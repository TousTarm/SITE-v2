<?php
    require_once "connect.php";

    $nickname = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO user (nickname,password) VALUES (?,?)");
    $stmt->bind_param("ss",$nickname,$password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

?>

<html>
    <body>
        <p>Sing up succesfull, you can now log in</p>
        <a href="/index_login.php">LOG IN</a>
    </body>
</html>
