<?php

namespace CrashCourse\Classes;

use CrashCourse\Controller\CharacterController;
use CrashCourse\Interfaces\CharacterCreatorInterface;
use PDOException;

class CharacterCreator extends Database implements CharacterCreatorInterface
{
    public function createCharacter(string $name, string $class, int $level, array $stats): CharacterController
    {
        return new CharacterController($name, $class, $level, $stats);
    }

    public function saveCharacter(CharacterController $character): void
    {
        try {
            $stmt = $this->connect()->prepare("INSERT INTO characters (name, class, level, stats) VALUES (:name, :class, :level, :stats)");
            $name = $character->getName();
            $stmt->bindParam(":name", $name);
            $class = $character->getClass();
            $stmt->bindParam(":class", $class);
            $level = $character->getLevel();
            $stmt->bindParam(":level", $level);
            $json_encode = json_encode($character->getStats());
            $stmt->bindParam(":stats", $json_encode);
            $stmt->execute();

            echo "New character created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
