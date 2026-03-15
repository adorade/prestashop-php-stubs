<?php

namespace PrestaShopBundle\Exception;

class InvalidPaginationParamsException extends \OutOfBoundsException
{
    /**
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
    }
}
