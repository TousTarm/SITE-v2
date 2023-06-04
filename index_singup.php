<?php session_start();?>
<?php require("content/bodyup1.html"); ?>
<link href="css/index.css" rel="stylesheet">
<link href="css/style_signup.css" rel="stylesheet">
<?php require("content/bodyup2.html"); ?>
    <?php include "phpcon/nav.php";?>
    <div class="main">
        <div class="signup">
            <div class="tag">
                <h3>Sign up!</h3>
            </div>
            <div class="form">
                <form action="php/signup.php" method="post" id="signupform">
                <div>
                    <input type="text" name="nickname" placeholder="nickname" id="nickname">
                </div>
                <div>
                    <input type="password" name="password" placeholder="password" id="password">
                </div>
                <div>
                    <input type="password" name="password2" placeholder="password" id="password2">
                </div>
                <div>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div>
                    <input type="text" name="surname" placeholder="surname">
                </div>
                <div>
                    <input type="text" name="email" placeholder="email" id="email">
                </div>
                    <button>Sign up!</button>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>