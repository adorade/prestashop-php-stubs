<?php

namespace PrestaShopBundle\Routing\Linter\Exception;

class SymfonyControllerConventionException extends \PrestaShopBundle\Routing\Linter\Exception\LinterException
{
    /**
     * {@inheritDoc}
     */
    public function __construct($message, string $invalidController)
    {
    }
    /**
     * @return string
     */
    public function getInvalidController()
    {
    }
}
