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

namespace Capable\Module\Employee\Domain\Model\Repository;

use Capable\Module\Employee\Domain\Model\Table;

class EmployeesRepository implements EmployeesRepositoryInterface
{
    protected $tableModel;

    public function __construct(Table $tableModel)
    {
        $this->tableModel = $tableModel;
    }

    public function getAll()
    {
        return $this->tableModel->getTableModel()->select();
    }
}
