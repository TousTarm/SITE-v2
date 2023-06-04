<?php
    include("php/connect.php");

    $sql = "SELECT * FROM user
            WHERE iduser = '".$_SESSION['iduser']."'";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
?>

<p>Your nickname : <?php echo$user["nickname"]; ?></p><br>
<p>Your name : <?php echo$user["name"]; ?></p><br>
<p>Your surname : <?php echo$user["surname"]; ?></p><br>
<p>Your email : <?php echo$user["email"]; ?></p><br>