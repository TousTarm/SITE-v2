<div class="mainsi">
    <div class="chat">
    <?php if(isset($_SESSION["idchat"])){
        echo "<h3>YOUR CHAT WITH ".strtoupper($_SESSION['chatfriend'])."</h3>";
        include("php/chat.php");
    }?>
    </div>
    <div class="friendlist">
        <form action = "php/addfriend.php" method="post">
            <input type=text name="friend" placeholder="name of your friend"> 
            <input type=submit value="SEND">
        </form>
        <?php include("php/friendlist.php"); ?>
        <br>
        <a href="php/logout.php" id="logout">LOG OUT</a>
    </div>
</div>