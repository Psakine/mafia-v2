<?php

namespace App\Traits;

trait ModelTableTrait
{
    public static function getTableName(): string
    {
        return (new self())->getTable();
    }
}
