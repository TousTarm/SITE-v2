<?php
    require "connect.php";
    $sql = "SELECT * FROM message WHERE friend_idchat='".$_SESSION['idchat']."'";
    $result=$mysqli->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["idowner"] == $_SESSION["iduser"]){
                echo"<div class='line'>";
                echo"<div class='left'>";
                echo"<p>".$row["body"]."</p>";
                echo"</div>";
                echo"</div>";
            }
            else{
                echo"<div class='line'>";
                echo"<div class='right'>";
                echo"<p>".$row["body"]."</p>";
                echo"</div>";
                echo"</div>";
            }
        }
    }
?>