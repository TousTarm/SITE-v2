<?php
    require_once "connect.php";

    $nickname = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT (nickname,password) FROM user WHERE user.nickname='$nickname' AND WHERE user.password='$password'";
    $result= mysqli_query($conn,$sql);
    
?>