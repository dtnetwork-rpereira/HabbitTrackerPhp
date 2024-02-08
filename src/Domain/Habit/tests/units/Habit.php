<?php

namespace HabbitTracker\Domain\Habit\tests\units;

use atoum;
use HabbitTracker\Domain\Habit\Habit;

class TestHabit extends atoum
{
    function testAddHabit()
    {
        $habit = new Habit();
        $this->given($habit)->then->string($habit->addHabit())->isEqualTo('ieowaieowa');
    }
}
