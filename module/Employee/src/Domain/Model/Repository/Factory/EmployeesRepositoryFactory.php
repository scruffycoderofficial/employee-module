<?php

namespace Capable\Module\Employee\Domain\Model\Repository;

use Interop\Container\ContainerInterface;
use Capable\Module\Employee\Domain\Model\Table;
use Laminas\ServiceManager\Factory\FactoryInterface;

class EmployeesRepositoryFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new EmployeesRepository($container->get(Table::class));
    }
}