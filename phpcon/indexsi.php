<p>WELLCOME <?=$user["nickname"]?> TO TOUSTBOOK</p>
<a href="php/logout.php">LOG OUT</a>
    <?php include("php/friendlist.php"); ?>
<form action = "php/addfriend.php" method="post">
    <input type=text name="friend" placeholder="name of your friend"> 
    <input type=submit value="SEND">
</from>