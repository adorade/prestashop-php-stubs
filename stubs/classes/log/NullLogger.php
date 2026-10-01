<?php

/**
 * NullLogger is an implementation of the PrestaShop logger that logs nothing.
 * It is convenient as a default value for logger instances, this way the code can be
 * executed the same way even if it does nothing.
 */
class NullLogger extends \AbstractLogger
{
    protected function logMessage($message, $level)
    {
    }
}
