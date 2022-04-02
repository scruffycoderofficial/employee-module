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

use Laminas\ServiceManager\Factory\InvokableFactory;
use Laminas\Router\Http\Literal;

return [
    'controllers' => [
        'factories' => [
            Action\IndexEmployees::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => ['employee' => __DIR__ . '/../view',],
    ],
    'router' => [
        'routes' => [
            'employees' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/employees',
                    'defaults' => [
                        'controller' => Action\IndexEmployees::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
];
