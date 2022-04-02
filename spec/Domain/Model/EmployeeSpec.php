<?php

namespace spec\Capable\Module\Employee\Domain\Model;

use Capable\Module\Employee\Domain\Model\Employee;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmployeeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Employee::class);
    }

    function it_exchanges_given_array_data_for_each_property_value()
    {
        $this->exchangeArray([])->shouldReturn(null);
    }
}
