<?php

namespace Capable\Module\Employee\Domain\Model;

interface Entity
{
    public function exchangeArray(array $data);
}