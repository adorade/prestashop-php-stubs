<?php

namespace PrestaShop\PrestaShop\Core\Configuration;

/**
 * Interface PhpExtensionCheckerInterface.
 */
interface PhpExtensionCheckerInterface
{
    /**
     * Check if PHP extension is loaded or not.
     *
     * @param string $extension
     *
     * @return bool
     */
    public function loaded($extension);
}
