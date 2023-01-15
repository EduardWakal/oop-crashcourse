<?php
use CrashCourse\Classes\CharacterDisplayer;
use CrashCourse\Classes\MySqlCharacterCounter;
use CrashCourse\Classes\Database;

ini_set('display_errors', 1);
require_once dirname(__FILE__) . '/../../vendor/autoload.php';
$conn = new Database();
$counter = new MySqlCharacterCounter($conn);
$characterCount = $counter->countCharacters();
$characterDisplayer = new CharacterDisplayer();
$characterDisplayer->displayCharacters();
?>

<div>
    <p>Created Characters: <?php echo $characterCount; ?></p>
</div>
