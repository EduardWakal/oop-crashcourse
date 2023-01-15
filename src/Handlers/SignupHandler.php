<?php

use CrashCourse\Controller\SignupController;

if (isset($_POST["submit"])) {

    require_once realpath('../../vendor/autoload.php');
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();

    header("location: ../index.php?error=none");
}