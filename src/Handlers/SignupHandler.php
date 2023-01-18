<?php

use CrashCourse\Controller\SignupController;
use CrashCourse\Controller\ProfileInfoController;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ini_set('display_errors', 1);
    require_once realpath('../../vendor/autoload.php');
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdRepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);
    $signup->signupUser();
    $userId = $signup->fetchUserId($uid);
    $profileInfo = new ProfileInfoController($userId, $uid);
    $profileInfo->defaultProfileInfo();
    header("location: ../../index.php?error=none");
}
