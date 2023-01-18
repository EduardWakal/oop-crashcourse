<?php

namespace CrashCourse\Classes;

use PDO;
use PDOException;
use CrashCourse\Classes\Database;

class CharacterModel extends Database
{
    public function getCharacters(): array
    {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM characters");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
