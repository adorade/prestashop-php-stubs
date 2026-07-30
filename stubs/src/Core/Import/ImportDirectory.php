<?php

namespace PrestaShop\PrestaShop\Core\Import;

/**
 * ImportDirectory class is responsible for returning import directory & data related to it.
 */
final class ImportDirectory
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
     * Check if import directory exists.
     *
     * @return bool
     */
    public function exists()
    {
    }
    /**
     * Check if import directory is writable.
     *
     * @return bool
     */
    public function isWritable()
    {
    }
    /**
     * Check if import directory is readable.
     *
     * @return bool
     */
    public function isReadable()
    {
    }
    /**
     * Use import directory object as a string.
     *
     * @return string
     */
    public function __toString()
    {
    }
}
