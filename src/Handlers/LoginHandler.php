<?php

use CrashCourse\Controller\LoginController;

if (isset($_POST["submit"])) {

    require_once realpath('../../vendor/autoload.php');
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $login = new LoginController($uid, $pwd);
    $login->loginUser();
    header("location: ../../index.php?error=none");
}

