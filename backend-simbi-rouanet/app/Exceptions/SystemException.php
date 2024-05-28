<?php

namespace App\Exceptions;

use Exception;

class SystemException extends Exception
{
    public function __construct(
        $message,
        $code = 0,
    ) {

        parent::__construct(json_encode($message), $code);
    }
}
