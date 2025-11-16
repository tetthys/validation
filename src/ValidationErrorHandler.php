<?php

namespace Tetthys\Validation;

use Closure;

interface ValidationErrorHandler
{
    public Closure $errorCallback {
        get => $this->errorCallback;
        set => $this->errorCallback = $value;
    }
}
