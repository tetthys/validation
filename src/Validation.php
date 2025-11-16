<?php

namespace Tetthys\Validation;

abstract class Validation
{
    public function __construct(private ValidationErrorHandler $validationErrorHandler) {}

    public function validate(string $field, ...$params): void
    {
        if ($this->isInvalid(...$params)) {
            ($this->validationErrorHandler->errorCallback)($field);
        }
    }

    abstract protected function isValid(...$params): bool;

    protected function isInvalid(...$params): bool
    {
        return ! $this->isValid(...$params);
    }
}
