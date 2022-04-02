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
use Laminas\Mvc\Controller\AbstractActionController;
use Capable\Module\Employee\Domain\Model\Repository\EmployeesRepository;
use Capable\Module\Employee\Domain\Model\Repository\EmployeesRepositoryInterface;

class IndexEmployees extends AbstractActionController
{
    protected $employeesRepository;

    public function __construct(EmployeesRepositoryInterface $employeesRepository)
    {
        if (!$employeesRepository instanceof EmployeesRepository) {
            throw new \InvalidArgumentException('Incorrect repoository instance given.');
        }

        $this->employeesRepository = $employeesRepository;
    }

    public function indexAction()
    {
        return new JsonModel([
            'data' => [],
            'success' => true,
        ]);
    }
}
