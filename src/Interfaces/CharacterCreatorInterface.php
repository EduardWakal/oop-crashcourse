<?php

namespace CrashCourse\Interfaces;
use CrashCourse\Controller\CharacterController;

interface CharacterCreatorInterface
{
    public function createCharacter(string $name, string $class, int $level, array $stats): CharacterController;
    public function saveCharacter(CharacterController $character): void;
}
