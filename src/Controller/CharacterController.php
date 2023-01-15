<?php

namespace CrashCourse\Controller;

class CharacterController
{
    private $name;
    private $class;
    private $level;
    private $stats;

    public function __construct(string $name, string $class, int $level, array $stats)
    {
        $this->name = $name;
        $this->class = $class;
        $this->level = $level;
        $this->stats = $stats;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getStats(): array
    {
        return $this->stats;
    }
}