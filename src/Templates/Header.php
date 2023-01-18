<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="src/Style/style.css">
    <link rel="stylesheet" href="../Style/style.css">
</head>
<body>

<header>
    <nav>
        <ul class="menu-member">
            <?php
            if (isset($_SESSION["useruid"])) {
                ?>
                <li><a href="src/Templates/Profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="src/Handlers/LogoutHandler.php" class="header-login-a">LOGOUT</a></li>
                <?php
            } else {
                ?>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>