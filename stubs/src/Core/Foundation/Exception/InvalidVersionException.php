<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Exception;

/**
 * This exception will be thrown if an invalid Shop version name is used
 * in the application.
 */
class InvalidVersionException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * Construct.
     *
     * @param string $version the provided PrestaShop version
     */
    public function __construct($version)
    {
    }
}
