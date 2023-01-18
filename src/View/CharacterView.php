<?php
namespace CrashCourse\View;

class CharacterView
{
    public static function displayCharacters(array $characters, int $mageCount, int $charactersCount): void
    {
        echo '<table class="character-table">';
        echo '<tr>';
        echo '<th class="character-table-header">Name</th>';
        echo '<th class="character-table-header">Class</th>';
        echo '<th class="character-table-header">Level</th>';
        echo '<th class="character-table-header">Stats</th>';
        echo '</tr>';
        foreach ($characters as $character) {
            $stats = json_encode($character["stats"]);
            $stats = str_replace(["{","}","\""], " ", $stats);
            $stats = stripslashes($stats);

            echo '<tr>';
            echo '<td class="character-table-cell">' . $character["name"] . '</td>';
            echo '<td class="character-table-cell">' . $character["class"] . '</td>';
            echo '<td class="character-table-cell">' . $character["level"] . '</td>';
            echo '<td class="character-table-cell">' . $stats . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo "<p>Mages: $mageCount</p>";
        echo "<p>Characters: $charactersCount</p>";
    }
}