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

namespace Capable\Module\Employee;

use Capable\Module\Employee;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ModuleManager\Feature\DependencyIndicatorInterface;

class Module implements ConfigProviderInterface, DependencyIndicatorInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return [
            'Laminas\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ],
            ],
        ];
    }

    public function getModuleDependencies()
    {
        return \Capable\Module\Employee\Modules::ENABLED;
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                Employee\Domain\Model\Table\EmployeeTable::class =>  function ($sm) {
                    return new Employee\Domain\Model\Table\EmployeeTable($sm->get('EmployeeTableGateway'));
                },
                'AlbumTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Laminas\Db\Adapter\Adapter');

                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Employee\Domain\Model\Entity\Employee());

                    return new TableGateway('emplooyee', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }
}
