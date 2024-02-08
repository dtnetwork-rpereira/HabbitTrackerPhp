<?php

namespace HabbitTracker\Domain\Habit;

class EmojiIcon
{
    private string $emoji_icon;
    public function __construct(string $emoji_icon)
    {
        $parsed_icon = trim($emoji_icon);

        if (empty($parsed_icon)) {
            throw new \InvalidArgumentException('O ícone não pode estar vazio!');
        }

        $this->emoji_icon = $parsed_icon;
    }

    public function __toString()
    {
        return $this->emoji_icon;
    }
}