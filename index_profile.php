<?php session_start();?>
<?php require("content/bodyup1.html"); ?>
<link href="css/index.css" rel="stylesheet">
<link href="css/style_profile.css" rel="stylesheet">
<?php require("content/bodyup2.html"); ?>
    <?php include "phpcon/nav.php";?>
    <body>
        <div class="main">
            <?php require("phpcon/profile.php");?>
        </div>
    </body>
</html>
