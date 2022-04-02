<?php

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