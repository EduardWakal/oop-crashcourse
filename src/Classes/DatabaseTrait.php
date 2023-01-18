<?php
namespace CrashCourse\Classes;

use PDO;
use PDOException;

trait DatabaseTrait {
    public function connect()
    {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}