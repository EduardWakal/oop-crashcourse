<?php

use CrashCourse\Controller\LoginController;

if (isset($_POST["submit"])) {

    require_once realpath('../../vendor/autoload.php');
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $login = new LoginController($uid, $pwd);
    $login->loginUser();
    header("location: ../../index.php?error=none");
}

