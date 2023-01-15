<?php

use CrashCourse\Classes\CharacterCreator;

ini_set('display_errors', 1);
require_once realpath('../../vendor/autoload.php');
$characterCreator = new CharacterCreator();
$character = $characterCreator->createCharacter($_POST["name"], $_POST["class"], $_POST["level"], ["strength" => $_POST['stats']['strength'], "intelligence" => $_POST['stats']['intelligence'], "dexterity" => $_POST['stats']['dexterity']]);
$characterCreator->saveCharacter($character);
header("location: ../../index.php?error=none");
