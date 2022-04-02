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

namespace Capable\Module\Employee\Test\Feature;

use Capable\Module\Employee\Test\Concern\ConfigConfigurator;
use Laminas\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

abstract class TestCase extends AbstractConsoleControllerTestCase
{
    use ConfigConfigurator;

    protected function setUp()
    {
        $this->setGlobalConfig([]);

        parent::setUp();
    }
}