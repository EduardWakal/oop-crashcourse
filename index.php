<?php
include_once "src/Templates/Header.php";
?>

<section class="character-creator">
    <?php if (isset($_SESSION["useruid"])) {
        include 'src/Templates/Character.php';
    } ?>
</section>
<?php
if (!isset($_SESSION["useruid"])) {
    ?>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <form action="src/Handlers/SignupHandler.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="index-login-login">
                <h4>LOGIN</h4>
                <form action="src/Handlers/LoginHandler.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
<?php } ?>

</body>
</html>