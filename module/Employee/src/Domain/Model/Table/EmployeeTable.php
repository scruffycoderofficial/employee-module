<?php

namespace Capable\Module\Employee\Domain\Model\Table;

use Capable\Module\Employee\Domain\Model\Table;
use Laminas\Db\TableGateway\TableGatewayInterface;

class EmployeeTable implements Table
{
    protected $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getTableModel()
    {
        return $this->tableGateway->getTable();
    }
}
