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

namespace Capable\Module\Employee\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Capable\Module\Employee\Module;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ModuleManager\Feature\DependencyIndicatorInterface;

class ModuleTest extends TestCase
{
    public function test_it_is_config_provider()
    {
        self::assertInstanceOf(ConfigProviderInterface::class, new Module());
    }

    public function test_it_provides_an_array_of_configs()
    {
        self::assertTrue(is_array((new Module())->getConfig()));
    }

    public function test_it_is_dependency_indicator()
    {
        self::assertInstanceOf(DependencyIndicatorInterface::class, new Module());
    }

    public function test_it_provides_an_array_of_indicated_dependencies()
    {
        self::assertTrue(is_array((new Module())->getModuleDependencies()));
    }
}
