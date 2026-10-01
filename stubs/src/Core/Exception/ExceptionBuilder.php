<?php

namespace PrestaShop\PrestaShop\Core\Exception;

/**
 * This utility class helps building an exception dynamically based on the exception class that is interpreted via reflection we try
 * and deduced the different parameters and try to inject the proper ones in the proper order.
 */
class ExceptionBuilder
{
    public static function buildException(string $exceptionClass, string $message, int $errorCode = 0, ?\Throwable $previousException = null, ?int $objectModelId = null): \Throwable
    {
    }
}
