<?php

namespace PrestaShop\PrestaShop\Core\Export;

/**
 * ImportDirectory class is responsible for returning export directory & data related to it.
 */
final class ExportDirectory
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * Get path to import directory.
     *
     * @return string
     */
    public function getDir()
    {
    }
    /**
     * Use export directory object as a string.
     *
     * @return string
     */
    public function __toString()
    {
    }
}
