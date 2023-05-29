<?php
    require_once "connect.php";

    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $stmt = $mysqli->prepare("INSERT INTO user (nickname,password,name,surname,email) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$nickname,$password,$name,$surname,$email);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();

?>

<html>
    <body>
        <p>Sing up succesfull, you can now log in</p>
        <a href="/index_login.php">LOG IN</a>
    </body>
</html>
