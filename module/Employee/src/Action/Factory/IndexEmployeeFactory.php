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

namespace Capable\Module\Employee\Action\Factory;

use Interop\Container\ContainerInterface;
use Capable\Module\Employee\Action\IndexEmployees;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Capable\Module\Employee\Domain\Model\Repository\EmployeesRepositoryInterface;

class IndexEmployeeFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new IndexEmployees($container->get(EmployeesRepositoryInterface::class));
    }
}
