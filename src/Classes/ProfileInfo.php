<?php

namespace CrashCourse\Classes;

use CrashCourse\Classes\Database;
use PDO;
use PDOException;
class ProfileInfo extends Database {

    protected function getProfileInfo($userId) {
        $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE user_id = ?;');

        if(!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }


        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {
        $stmt = $this->connect()->prepare('UPDATE profiles SET profiles_about = ?, profiles_introtitle = ?, profiles_introtext = ? WHERE user_id = ?;');

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {
        $stmt = $this->connect()->prepare('INSERT INTO profiles (profiles_about, profiles_introtitle, profiles_introtext, user_id) VALUES (?, ?, ?, ?);');

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}