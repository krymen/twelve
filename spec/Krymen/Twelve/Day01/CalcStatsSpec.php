<?php

namespace spec\Krymen\Twelve\Day01;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalcStatsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Krymen\Twelve\Day01\CalcStats');
    }

    function it_should_calculate_minimum_value()
    {
        $this->minimum(array(6, 9, 15, -2, 92, 11))->shouldReturn(-2);
    }

    function it_should_calculate_maximium_value()
    {
        $this->maximum(array(6, 9, 15, -2, 92, 11))->shouldReturn(92);
    }

    function it_should_calculate_number_of_elements_in_the_sequence()
    {
        $this->count(array(6, 9, 15, -2, 92, 11))->shouldReturn(6);
    }

    function it_should_calculate_average_value()
    {
        $this->average(array(6, 9, 15, -2, 92, 11))->shouldReturn(21.833333);
    }
}
