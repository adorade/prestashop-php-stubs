<?php

namespace PrestaShop\PrestaShop\Core\Exception;

/**
 * Exception class thrown when a filesystem operation failure happens.
 */
class IOException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable $previous
     * @param string|null $path
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null, $path = null)
    {
    }
    /**
     * Returns the associated path for the exception.
     *
     * @return string|null
     */
    public function getPath()
    {
    }
}
