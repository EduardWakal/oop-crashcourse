<?php

use CrashCourse\Classes\Database;
use CrashCourse\Classes\ProfileInfo;
use CrashCourse\Controller\ProfileInfoController;

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once realpath('../../vendor/autoload.php');
    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $about = htmlspecialchars($_POST["about"], ENT_QUOTES, "UTF-8");
    $introTitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, "UTF-8");
    $introText = htmlspecialchars($_POST["introtext"], ENT_QUOTES, "UTF-8");

    $profileInfo = new ProfileInfoController($id, $uid);

    $profileInfo->updateProfileInfo($about, $introTitle, $introText);

    header("location: ../Templates/Profile.php?error=none");

}