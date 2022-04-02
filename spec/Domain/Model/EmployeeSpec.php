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

use Capable\Module\Employee\Domain\Model\Employee;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmployeeSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Employee::class);
    }

    public function it_exchanges_given_array_data_for_each_property_value()
    {
        $this->exchangeArray([])->shouldReturn(null);
    }
}
