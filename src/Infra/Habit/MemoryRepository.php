<?php

namespace HabbitTracker\Infra\Habit;

use HabbitTracker\Domain\Habit\Habit;
use HabbitTracker\Domain\Habit\HabitRepository;
use HabbitTracker\Domain\Habit\Title;

class MemoryRepository implements HabitRepository
{
    private $data = [];

    public function add(Habit $habit)
    {
        return '';
    }

    public function searchByTitle(Title $title)
    {
        return array_filter($this->data, function ($item) use ($title) {
            return $title == $item->title;
        });
    }

    public function searchAll()
    {
        return $this->data;
    }
}
