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

namespace Capable\Module\Employee\Action;

use Laminas\View\Model\JsonModel;
use Capable\Module\Employee\Domain\Model\Table;
use Laminas\Mvc\Controller\AbstractActionController;
use Capable\Module\Employee\Domain\Model\EmployeeTable;

class IndexEmployees extends AbstractActionController
{
    protected $table;

    public function __construct(Table $table)
    {
        if (!$table instanceof EmployeeTable) {
            throw new \InvalidArgumentException('Incorrect table instance given.');
        }

        $this->table = $table;
    }

    public function indexAction()
    {
        return new JsonModel([
            'data' => [],
            'success' => true,
        ]);
    }
}
