<?php

namespace SequoiaLabs\Reversia\Exception;

use ErrorException;

class NotImplementedErrorException extends ErrorException
{
    public function __construct(
        $message = "Not implemented",
        $code = 0,
        $severity = 1,
        $filename = __FILE__,
        $lineno = __LINE__,
        $previous = null
    ) {
        parent::__construct($message, $code, $severity, $filename, $lineno, $previous);
    }
}
