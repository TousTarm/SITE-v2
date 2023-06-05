<div class="profilepic">
    <h3 id="pp">Your profile picture will be here</h3>
</div>
    <div class="datatable">
        <div class="data">
            <p>Your nickname : <?php echo$_SESSION["nickname"]; ?></p>
            <hr>
        </div>
        <div class="data">
            <p>Your name : <?php echo$_SESSION["name"]; ?></p>
            <hr>
        </div>
        <div class="data">
            <p>Your surname : <?php echo$_SESSION["surname"]; ?></p>
            <hr>
        </div>
        <div class="data">
            <p>Your email : <?php echo$_SESSION["email"]; ?></p>
            <hr>
        </div>
        <form action="" method="get">
            <input type="submit" value="update profile" id="update_profile" name="update_profile">
        </form>
    <div>
</div>