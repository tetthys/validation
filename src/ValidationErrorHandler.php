<?php

namespace Tetthys\Validation;

use Closure;

interface ValidationErrorHandler
{
    public function getErrorCallback(): Closure;
}
