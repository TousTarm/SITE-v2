<div class="friends">
    <h3>FRIEND LIST</h3>
    <form action="php/startchat.php" method="get">
    <?php
        $mysqli = require __DIR__ ."/connect.php";
        $sql = "SELECT idfriend FROM friend WHERE user_iduser =".$_SESSION['iduser'];
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $sql2 = "SELECT iduser,nickname FROM user WHERE iduser =".$row["idfriend"];
                $result2 = $mysqli->query($sql2);
                if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                        echo "<input type='submit' value='".$row2["nickname"]."'name='friendnickname'><br>";
                    }
                }
            }
        }
    ?>
    </form>
</div>
