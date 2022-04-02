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

namespace Capable\Module\Employee\Test\Concern;

use Laminas\Stdlib\ArrayUtils;

trait ConfigConfigurator
{
    protected function setGlobalConfig(array $configOverrides)
    {
        if (!method_exists($this, 'setApplicationConfig')) {
            throw new \Exception("Module Features require Context Configurations in isolation");
        }

        $this->setApplicationConfig(ArrayUtils::merge($this->loadedConfigs(), $configOverrides));
    }

    abstract public function loadedConfigs();
}