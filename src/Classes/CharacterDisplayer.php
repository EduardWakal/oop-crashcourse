<?php

namespace CrashCourse\Classes;

use PDO;
use PDOException;
use CrashCourse\Classes\Database;

class CharacterDisplayer extends Database
{
    public function displayCharacters(): void
    {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM characters");
            $stmt->execute();
            $characters = $stmt->fetchAll();

            echo '<table class="character-table">';
            echo '<tr>';
            echo '<th class="character-table-header">Name</th>';
            echo '<th class="character-table-header">Class</th>';
            echo '<th class="character-table-header">Level</th>';
            echo '<th class="character-table-header">Stats</th>';
            echo '</tr>';
            foreach ($characters as $character) {
                echo '<tr>';
                echo '<td class="character-table-cell">' . $character["name"] . '</td>';
                echo '<td class="character-table-cell">' . $character["class"] . '</td>';
                echo '<td class="character-table-cell">' . $character["level"] . '</td>';
                echo '<td class="character-table-cell">' . $character["stats"] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
