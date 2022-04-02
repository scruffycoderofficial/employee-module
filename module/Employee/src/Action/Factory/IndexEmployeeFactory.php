<?php

namespace Capable\Module\Employee\Action\Factory;

use Interop\Container\ContainerInterface;
use Capable\Module\Employee\Domain\Model\Table;
use Capable\Module\Employee\Action\IndexEmployees;
use Laminas\ServiceManager\Factory\FactoryInterface;

class IndexEmployeeFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new IndexEmployees($container->get(Table::class));
    }
}