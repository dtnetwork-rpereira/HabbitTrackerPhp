<?php

namespace HabbitTracker\Domain\Habit;

class Habit
{
    private string $id;
    private Title $title;
    private string $emoji_icon;

    function addHabit()
    {
        return 'Habit added!';
    }

    function title()
    {
        return $this->title;
    }

    function emojiIcon()
    {
        return $this->emoji_icon;
    }
}
