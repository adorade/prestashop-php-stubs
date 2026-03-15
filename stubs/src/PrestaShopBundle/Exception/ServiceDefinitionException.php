<?php

namespace PrestaShopBundle\Exception;

/**
 * Exception thrown when a service definition failed.
 */
class ServiceDefinitionException extends \Exception
{
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @param string $message
     * @param string $serviceId
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($message, $serviceId, $code = 0, \Exception $previous = null)
    {
    }
}
