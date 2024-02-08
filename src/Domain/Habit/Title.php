<?php

namespace HabbitTracker\Domain\Habit;

class Title
{
    private string $title;

    function __construct(string $title)
    {
        $parsed_title = trim($title);

        if (empty($parsed_title)) {
            throw new \InvalidArgumentException("O título não pode ser vazio!");
        }

        $max_characters = 200;
        if (strlen($parsed_title) > $max_characters) {
            throw new \InvalidArgumentException("O título não pode ter mais de {$max_characters} caracteres");
        }

        $this->title = $parsed_title;
    }

    function __toString()
    {
        return $this->title;
    }
}