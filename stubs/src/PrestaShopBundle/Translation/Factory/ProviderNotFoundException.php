<?php

namespace PrestaShopBundle\Translation\Factory;

/**
 * Thrown if no provider is found for the selected identifier.
 */
class ProviderNotFoundException extends \Exception
{
    public function __construct($identifier)
    {
    }
}
