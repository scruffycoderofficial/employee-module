<?php

/*
 * Copyright (c) 2022 Luyanda Siko <sikoluyanda@gmail.com>,
 * All rights reserved.
 *
 * This file is part of Beyond Capable.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace spec\Capable\Module\Employee\Domain\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;
use Capable\Module\Employee\Domain\Model\EmployeeTable;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmployeeTableSpec extends ObjectBehavior
{
    public function let(TableGatewayInterface $tableGateway)
    {
        $this->beConstructedWith($tableGateway);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(EmployeeTable::class);
    }

    public function it_fetches_an_array_of_employees()
    {
        $this->fetchAll()->shouldBeArray();
    }
}
