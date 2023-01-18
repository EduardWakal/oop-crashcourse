<?php
namespace CrashCourse\View;

class CharacterView
{
public function displayCharacters(array $characters): void
{
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
}
}