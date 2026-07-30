<?php

namespace PrestaShopBundle\Routing\Linter\Exception;

class ControllerNotFoundException extends \PrestaShopBundle\Routing\Linter\Exception\LinterException
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
