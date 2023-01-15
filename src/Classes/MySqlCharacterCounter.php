<?php

namespace CrashCourse\Classes;

use CrashCourse\Abstract\CharacterCounter;
use CrashCourse\Classes\Database;
use PDO;
use PDOException;

class MySqlCharacterCounter extends CharacterCounter
{
    private ?PDO $conn;

    public function __construct(Database $conn)
    {
        $this->conn = $conn->connect();
    }

    public function countCharacters(): int
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM characters");
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return (int)$count;
    }
}

