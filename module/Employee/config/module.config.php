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

use Laminas\Router\Http\Literal;
use Capable\Module\Employee;

return [
    'router' => [
        'routes' => [
            'employees' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/employees',
                    'defaults' => [
                        'controller' => Employee\Action\IndexEmployees::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Employee\Action\IndexEmployees::class => Employee\Action\Factory\IndexEmployeeFactory::class,
        ],
    ],
    'service_manager' => [
        'aliases' => [
            Employee\Domain\Model\Repository\EmployeesRepositoryInterface::class => Employee\Domain\Model\Repository\EmployeesRepository::class,
        ],
        'factories' => [
            Employee\Domain\Model\Repository\EmployeesRepository::class => Employee\Domain\Model\Repository\EmployeesRepositoryFactory::class,
        ],
        'invokables' => [],
        'delegators' => [],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'employee/index/index' => __DIR__ . '/../view/employee/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
