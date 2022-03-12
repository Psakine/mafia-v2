<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class BaseService
{
    protected const MODEL = '';

    public function all(): Collection
    {
        return call_user_func([$this->getModel(), 'all']);
    }

    protected function getModel(): string
    {
        if ('' === static::MODEL) {
            throw new ModelNotFoundException('Нужно присвоить модель "protected const MODEL"');
        }

        return static::MODEL;
    }

    public function getById(int $id)
    {
        return call_user_func([$this->getModel(), 'find'], $id);
    }
}
