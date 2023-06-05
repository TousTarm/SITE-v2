<?php
    include("php/connect.php");
?>
<div class="profilepic">
    <h3 id="pp">Your profile picture will be here</h3>
</div>
    <div class="datatable">
        <form method="post" action="/php/update_profile.php">
            <div class="data">
                <input type="text" name="nickname" value=<?php echo$_SESSION["nickname"];?>>
            </div>
            <div class="data">
                <input type="text" name="name" value=<?php echo$_SESSION["name"];?>>
            </div>
            <div class="data">
                <input type="text" name="surname" value=<?php echo$_SESSION["surname"];?>>
            </div>
            <div class="data">
                <input type="text" name="email" value=<?php echo$_SESSION["email"];?>>
            </div>
            <input type="submit" value="Update!" id="update_profile" name="update_profile">
        </form>
    <div>
</div>