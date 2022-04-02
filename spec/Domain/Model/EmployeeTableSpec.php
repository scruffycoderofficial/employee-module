<?php

namespace spec\Capable\Module\Employee\Domain\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;
use Capable\Module\Employee\Domain\Model\EmployeeTable;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmployeeTableSpec extends ObjectBehavior
{
    function let(TableGatewayInterface $tableGateway)
    {
        $this->beConstructedWith($tableGateway);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(EmployeeTable::class);
    }

    function it_fetches_an_array_of_employees()
    {
        $this->fetchAll()->shouldBeArray();
    }
}
