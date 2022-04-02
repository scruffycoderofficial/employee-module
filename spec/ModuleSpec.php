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

namespace spec\Capable\Module\Employee;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Capable\Module\Employee\Module;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ModuleSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Module::class);
    }

    public function it_implements_config_provider()
    {
        $this->shouldImplement(ConfigProviderInterface::class);
    }

    public function it_provides_an_array_of_configs()
    {
        $this->getConfig()->shouldBeArray();
    }
}
