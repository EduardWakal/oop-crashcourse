<?php

namespace CrashCourse\Classes;

use PDO;
use PDOException;
use CrashCourse\Classes\Database;
use ArrayIterator;

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

    public function countMages(): int
    {
        $characters = $this->getCharacters();
        $iterator = new ArrayIterator($characters);
        $count = 0;
        while($iterator->valid()) {
            if($iterator->current()['class'] == 'Mage') {
                $count++;
            }
            $iterator->next();
        }
        return $count;
    }
}
