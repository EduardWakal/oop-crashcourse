<?php
use CrashCourse\Classes\CharacterModel;
use CrashCourse\View\CharacterView;
use CrashCourse\Classes\MySqlCharacterCounter;

ini_set('display_errors', 1);
require_once dirname(__FILE__) . '/../../vendor/autoload.php';

$model = new CharacterModel();
$characters = $model->getCharacters();

$counter = new MySqlCharacterCounter($model);
$characterCount = $counter->countCharacters();

$view = new CharacterView();
$view->displayCharacters($characters);
?>

<div>
    <p>Created Characters: <?php echo $characterCount; ?></p>
</div>
