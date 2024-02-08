<?php

namespace HabbitTracker\Domain\Habit;

interface HabitRepository
{
    public function add(Habit $habit): string;
    public function searchByTitle(Title $title): array;
    public function searchAll(): array;
}