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

namespace Capable\Module\Employee\Tests\Feature;

use Capable\Module\Employee\Modules;
use Capable\Module\Employee\Action\IndexEmployees;
use Capable\Module\Employee\Test\Feature\TestCase;

class IndexEmployeesTest extends TestCase
{
    public function test_index_action_can_be_accessed(): void
    {
        $this->dispatch('/employees', 'GET');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('employees');
        $this->assertControllerName(IndexEmployees::class);
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('employees');
    }

    public function test_invalid_route_does_not_rash(): void
    {
        $this->dispatch('/invalid/route', 'GET');
        $this->assertResponseStatusCode(404);
    }

    public function loadedConfigs()
    {
        return Modules::ENABLED;
    }
}