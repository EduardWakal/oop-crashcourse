<?php
include_once "Header.php";
require_once realpath('../../vendor/autoload.php');
use CrashCourse\View\ProfileInfoView;
$profileInfo = new ProfileInfoView();
?>

<section class="profile">
    <div class="profile-bg">
        <div class="wrapper">
            <div class="profile-info">
              <div class="profile-info-img">
                <p>
                  <?php
                      echo $_SESSION["useruid"];
                  ?>
                </p>
                <div class="break"></div>
                <a href="ProfileSettings.php" class="follow-btn">PROFILE SETTINGS</a>
              </div>
              <div class="profile-info-about">
                <h3>ABOUT</h3>
                <p>
                  <?php
                    $profileInfo->fetchAbout($_SESSION["userid"]);
                  ?>
                </p>
                <h3>FOLLOWERS</h3>
                <h3>FOLLOWING</h3>
              </div>
            </div>
            <div class="profile-content">
              <div class="profile-intro">
                <h3>
                  <?php
                      $profileInfo->fetchTitle($_SESSION["userid"]);
                  ?>
                </h3>
                <p>
                  <?php
                      $profileInfo->fetchText($_SESSION["userid"]);
                  ?>
                </p>
              </div>
              <div class="profile-posts">
                <h3>POSTS</h3>
                <div class="profile-post">
                  <h2>ROW-1</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                  <p>12:46 - 01/01/2023</p>
                </div>
                <div class="profile-post">
                  <h2>ROW-2</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                  <p>16:11 - 01/01/2023</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="character-creator">
    <?php if (isset($_SESSION["useruid"])) {
        include 'src/Templates/Character.php';
    } ?>
</section>

</body>
</html>