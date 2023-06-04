<?php
    require_once "connect.php";
/*
    if(empty($_POST["nickname"])){
    die("Nickname is required");
}
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email required");
}
if (strlen($_POST["password"])<=8){
    die("Password must be longer than 8 characters");
}
if ($_POST["password2"] !== $_POST["password"]){
    die("Passwords do not match");
}     
*/
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
    echo"KURVAAAAAAAAAAAA";
    header("Location:/index_login.php");
?>
