<?php

namespace PrestaShopBundle\Routing\Linter\Exception;

/**
 * Thrown when naming convention is not followed
 */
class NamingConventionException extends \PrestaShopBundle\Routing\Linter\Exception\LinterException
{
    /**
     * @var string
     */
    protected $expectedRouteName;
    public function __construct($message = '', $code = 0, \RuntimeException $previous = null, $expectedRouteName = null)
    {
    }
    /**
     * @return string
     */
    public function getExpectedRouteName(): string
    {
    }
}
