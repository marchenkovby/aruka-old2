<?php

namespace Aruka\Exceptions;

use Exception;

class ViewNotFoundException extends Exception
{
    protected string $messages = 'View not found';
}
