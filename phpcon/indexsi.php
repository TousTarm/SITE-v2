<div class="mainsi">
    <div class="chatside">
        <div class="chat">
        <?php if(isset($_SESSION["idchat"])){
            echo "<h3>YOUR CHAT WITH ".strtoupper($_SESSION['chatfriend'])."</h3>";
            include("php/chat.php");
        }?>
        </div>
        <div class="bottom">
            <form action="php/message.php" method="post">
                <input type="text" name="message" placeholder="enter your message here">
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
    <div class="friendlist">
        <h3 id="headlinefriend"> ADD FRIEND </h3>
        <form action = "php/addfriend.php" method="post" id="addfriend">
            <input type=text name="friend" placeholder="name of your friend"> 
            <input type=submit value="ADD">
        </form>
        <?php include("php/friendlist.php"); ?>
        <br>
        <a href="php/logout.php" id="logout">LOG OUT</a>
    </div>
</div>