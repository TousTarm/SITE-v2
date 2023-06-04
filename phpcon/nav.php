<nav>
<a href="index.php" id="a1">HOME</a>
<a href="index_patch_notes.php" id="a2">PATCH NOTES</a>
<a href="index_about_creator.php" id="a3">ABOUT CREATOR</a>
<a href="index_current_bugs.php" id="a6">CURRENT BUGS</a>
<?php
if(!isset($_SESSION["iduser"])){
    echo "<a href='index_login.php' id='a4'>LOG IN</a>";
    echo "<a href='index_singup.php' id='a5'>SIGN UP</a>";
}?>
<div id="signedas">
<?php
if(isset($_SESSION["iduser"])){
    echo "<a href='index_profile.php' id='a7'>SIGNED AS ".strtoupper($_SESSION["nickname"])."</a>";
}
?>
<img src="/img/1.png" alt="toustbook logo" width="50px" height="50px">
</nav>